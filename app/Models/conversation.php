<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversation extends Model
{
    use HasFactory;

    protected $fillable =[
      'user_id1',
      'user_id2',
      'last_message',
      'img_user1',
      'img_user2',
      'name_user1',
      'name_user2',
        'read'
    ];
}
