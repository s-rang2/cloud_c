<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CloudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cloud')->insert([
            'id'=>'1',
            'name'=>''
        ])
    }
}
