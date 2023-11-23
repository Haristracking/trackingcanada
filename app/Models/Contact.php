<?php

namespace App\Models;

use App\Mail\ContactFormEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'solution'
    ];
    protected $table = 'contact_form';

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "info@tracking.me";
            Mail::to($adminEmail)->send(new ContactFormEmail($item));
        });
    }
}
