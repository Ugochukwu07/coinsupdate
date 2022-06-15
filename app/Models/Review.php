<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory, Notifiable;

    //table
    protected $table = 'reviews';

    //fillables
    protected $fillable = [
        'name', 'email', 'website',
        'review', 'is_approved', 'approved_by'
    ];
}
