<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 't_chat';

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'id_guest', 'id_guest');
    }
}
