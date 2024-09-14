<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;

        // Fields or props
        protected $table = 'admins';

        // if it set $fillable then it can be used the php artisan tinker
        protected $fillable = ['username', 'password'];
}
