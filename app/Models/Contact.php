<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "your_admin_email@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }

}
