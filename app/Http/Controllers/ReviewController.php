<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Events\NewReviewEvent;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|max:191|string',
            'email' => 'required|email|max:191',
            'website' => 'nullable|url',
            'review' => 'required|max:300'
        ]);

        if($validator->fails()){
            //toastr
            toastr($validator->errors()->first(), 'error', 'Something Went Wroung');

            $backUrl = URL::previous() . "#reviews";
            return redirect($backUrl);
        }else{
            $review = Review::create([
                'name' => $request->name,
                'email' => $request->email,
                'website' => $request->website,
                'review' => $request->review
            ]);

            event(new NewReviewEvent($review));

            return back();
        }
    }
}
