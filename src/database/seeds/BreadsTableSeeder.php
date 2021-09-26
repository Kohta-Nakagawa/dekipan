<?php

use Illuminate\Database\Seeder;
use App\Bread;

class BreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<10; $i++){
            Bread::create([
                'name' => 'パン'.strval($i),
                'price'=> $i*100,
            ]);
        }
    }
}
