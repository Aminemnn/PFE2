<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delete extends Model
{
    use HasFactory;


    protected $fillable=[
      'id_user',
      'name_user',
      'img_user'
    ];


}
