<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;

    protected $table = 'buses';

//    public function festival(){
//        return $this->belongsTo(Festival::class);
//    }
}