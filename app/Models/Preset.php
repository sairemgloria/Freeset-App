<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preset extends Model
{
   use HasFactory;

   // Fields or props
   protected $table = 'presets';

   // if it set $fillable then it can be used the php artisan tinker
   protected $fillable = ['preset_id', 'title', 'description', 'price', 'display_image_before', 'display_image_after', 'image_path', 'preset_path'];
}
