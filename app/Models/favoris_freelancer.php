<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favoris_freelancer extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_ann',
      'title',
      'category',
      'sous_category',
        'price_category',
        'price',
        'type_price',
        'semaine',
        'date',
        'description',
        'id_user',
        'name_user',
        'img_user',
        'img_client',
        'name_client',
        'id_client'
    ];
}
