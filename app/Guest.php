<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 't_guest';

    protected $fillable = ['nama_guest','asal','instansi','jabatan','jk','email','no_telepon'];

    protected $primaryKey = 'id_guest';

    public $timestamps = false;

    public $incrementing = false;
    
    public function kabkota()
    {
        return $this->belongsTo(KabKota::class, 'asal', 'id_kab_kota');
    }

    public function chat()
    {
        return $this->hasMany(Chat::class, 'id_guest', 'id_guest');
    }
}
