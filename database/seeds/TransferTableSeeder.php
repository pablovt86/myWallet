<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TransferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfers')->insert([
            'description'=>'salary',
            'amount'=> 4800,
            'wallet_id'=>1,
            'created_at' =>date("y-m-d H:i:s"),
            'updated_at' =>date("y-m-d H:i:s")
        ],[
            'description'=>'rent',
            'amount'=> 1200,
            'wallet_id'=>1,
            'created_at' =>date("y-m-d H:i:s"),
            'updated_at' =>date("y-m-d H:i:s")
        ]);
    }
}
