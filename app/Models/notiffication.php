<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notiffication extends Model
{
    use HasFactory;
    protected $fillable=[
      'id_expediteur',
      'name_expediteur',
      'img_expedietur',
        'id_destinateur',
        'message',
        'read',
    ];
}
