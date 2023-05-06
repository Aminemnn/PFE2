<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable=[
        'id_projet',
      'title_projet',
      'categorie',
       'sous_categorie',
        'price_categorie',
        'price',
        'type_price',
        'semaine',
        'date',
        'description',
        'id_user',
        'name_user',
        'image_user',
        'id_destinateur',
        'etat',
        'adresse_user',
        'country_user',
        'ville_user',
        'phone_user'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
