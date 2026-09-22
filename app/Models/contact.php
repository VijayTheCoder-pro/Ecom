<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class Contact extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['fullname', 'email', 'phone', 'subject', 'message'];

    protected $table = 'contact';

    /**

     * Write code on Method

     *

    * @return response()

      */

    // public static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($item) {



    //         $adminEmail = "amirbanda101@gmail.com";

    //         Mail::to($adminEmail)->send(new ContactMail($item));
    //     });
    // }
}
