<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // informando o tipo de dados
    protected $casts = [
        'items'=>'array'
    ];
   // informando o tipo de dados
    protected $datas = ['data'];

    public function user(){
        return $this->belongsTo('App\Modes\User');
    }
}
