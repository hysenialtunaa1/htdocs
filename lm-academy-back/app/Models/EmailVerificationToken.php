<?php

n\amespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailVerificationToken extends Model
{
        protected $fillable = [
            'email', 'token' , 'code',
        ];
}
