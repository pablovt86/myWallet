<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->insert([
            'money'=>3600.00,
            'created_at' =>date("y-m-d H:i:s"),
            'updated_at' =>date("y-m-d H:i:s")
        ]);
    }
}
