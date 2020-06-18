<?php

namespace Tests\Feature;
 
 use Tests\TestCase;
 use Illuminate\Foundation\Testing\RefreshDatabase;
 use Illuminate\Foundation\Testing\WithFaker;
 use App\Wallet;
 use App\Transfer;
 

 class WallTest extends TestCase
 {

     use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function testGetWallet()
     {
    $wallet= factory(wallet::class)->create();
    $transfers = factory(Transfer::class, 3)->create([
    //el faker de tranfer va a generar wallet_id entonces los sustituimos por el $wallet->id
    'wallet_id' => $wallet->id
    ]);

     
    //  almaceno todo el request el la variable $response 
    //voy a  validar el status del serve que sea de 200
    //lo que queiero es saber la estructura de informacion    
        $response = $this->json('GET','/api/wallet');
 
        $response->assertStatus(200)
        ->assertJsonStructure([
            //tranfers en un array y lo que quiero saber son los atributos de cada objecto como id amount y una descripcion y wallet_id
            'id','money','transfers'=>[
                '*'=>[
                    'id','amount','description','wallet_id'
                ]
            ]
        ]);
        $this->assertCount(3, $response->json()['transfers']);
    }
} 
