<?php

namespace App;
use App\Transfer;
use Illuminate\Database\Eloquent\Model;
class Wallet extends Model
{
    public function transfers(){
        return $this->hasMany('App\Transfer');
    }
}
