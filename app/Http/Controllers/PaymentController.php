<?php

namespace App\Http\Controllers;

use stdClass;


use Flutterwave\Rave;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Payment\EventHandlerController;

class PaymentController extends Controller {

    public function receive(Request $request){
        $request->validate([
            'email' => 'required|email|max:225',
            'full_name' => 'required|string'
        ]);

        $name = explode(' ', $request->fullname);

        $data = new stdClass;
        $data->amount = 10000;
        $data->payment_options = 'card,ussd,mpesa,barter,mobilemoneyghana,mobilemoneyrwanda,mobilemoneyzambia,mobilemoneyuganda,banktransfer,account';
        $data->description = 'for an eBook'; $data->logo = asset('favicon.ico'); $data->title = 'Get Your eBook Now!!';
        $data->country = 'Nigeria'; $data->currency ='NGN'; $data->email = $request->email; $data->firstname = $name[0]; $data->lastname = $name[1];
        $data->pay_button_text = 'Grab Your Copy'; $data->url = route('getbook.success');
    }

    public function start(){
        
        $URL = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $getData = $_GET;
        $postData = $_POST;
        $publicKey = $_SERVER['PUBLIC_KEY'];
        $secretKey = $_SERVER['SECRET_KEY'];
        $success_url = $postData['successurl'];
        $failure_url = $postData['failureurl'];
        $env = $_SERVER['ENV'];

        if($postData['amount']){
            $_SESSION['publicKey'] = $publicKey;
            $_SESSION['secretKey'] = $secretKey;
            $_SESSION['env'] = $env;
            $_SESSION['successurl'] = $success_url;
            $_SESSION['failureurl'] = $failure_url;
            $_SESSION['currency'] = $postData['currency'];
            $_SESSION['amount'] = $postData['amount'];
        }

        $prefix = 'RV'; // Change this to the name of your business or app
        $overrideRef = false;

        // Uncomment here to enforce the useage of your own ref else a ref will be generated for you automatically
        if($postData['ref']){
            $prefix = $postData['ref'];
            $overrideRef = true;
        }

        $payment = new Rave($_SESSION['secretKey'], $prefix, $overrideRef);

        if($postData['amount']){
            // Make payment
            $payment
            ->eventHandler(new EventHandlerController)
            ->setAmount($postData['amount'])
            ->setPaymentOptions($postData['payment_options']) // value can be card, account or both
            ->setDescription($postData['description'])
            ->setLogo($postData['logo'])
            ->setTitle($postData['title'])
            ->setCountry($postData['country'])
            ->setCurrency($postData['currency'])
            ->setEmail($postData['email'])
            ->setFirstname($postData['firstname'])
            ->setLastname($postData['lastname'])
            ->setPayButtonText($postData['pay_button_text'])
            ->setRedirectUrl($URL)
            // ->setMetaData(array('metaname' => 'SomeDataName', 'metavalue' => 'SomeValue')) // can be called multiple times. Uncomment this to add meta datas
            // ->setMetaData(array('metaname' => 'SomeOtherDataName', 'metavalue' => 'SomeOtherValue')) // can be called multiple times. Uncomment this to add meta datas
            ->initialize();
        }else{
            if($getData['cancelled'] && $getData['tx_ref']){
                // Handle canceled payments
                $payment
                ->eventHandler(new EventHandlerController)
                ->requeryTransaction($getData['tx_ref'])
                ->paymentCanceled($getData['tx_ref']);
            }elseif($getData['tx_ref']){
                // Handle completed payments
                $payment->logger->notice('Payment completed. Now requerying payment.');
                
                $payment
                ->eventHandler(new EventHandlerController)
                ->requeryTransaction($getData['tx_ref']);
            }else{
                $payment->logger->warn('Stop!!! Please pass the txref parameter!');
                echo 'Stop!!! Please pass the txref parameter!';
            }
        }

    }
    public function getURL($url,$data = array()){
        $urlArr = explode('?',$url);
        $params = array_merge($_GET, $data);
        $new_query_string = http_build_query($params).'&'.$urlArr[1];
        $newUrl = $urlArr[0].'?'.$new_query_string;
        return $newUrl;
    }
}