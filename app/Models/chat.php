<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    protected $fillable=[
        'conversation_id',
        'id_expediteur',
        'id_destinateur',
        'name_expediteur',
        'name_destinateur',
        'img_expedietur',
        'img_destinateur',
        'message',
        'read'
    ];
}
