<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KabKota extends Model
{
    protected $table = 't_kab_kota';

    public $timestamps = false;

    public function guest()
    {
        return $this->hasMany(Guest::class, 'asal', 'id_kab_kota');
    }
}
