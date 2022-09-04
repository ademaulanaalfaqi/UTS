<?php

namespace App\Models;
use App\Models\User;


class Artikel extends Model{
    protected $table = 'artikel';

    function writer(){
        return $this->belongsTo(User::class, 'id_user');
    }
}