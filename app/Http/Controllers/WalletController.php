<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;

class WalletController extends Controller
{
    public function index(){

        $wallet = Wallet::firstOrFail(); //con el metodo load le dicemos que cargue la relacion con tranfers
        return response()->json($wallet->load('transfers'), 200);
    }
}
