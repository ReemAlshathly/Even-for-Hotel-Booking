<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('rooms')->insert([
           
            'code' => '34',
            'floor' => '3',
            'cost' =>  '200.00',
            'status' => '1',
            'TV' => '1',
            'bids' => '3',
            'wifi' =>  '1',
            'parking' =>  '1',
            'AC' =>  '1',
            'pool' =>  '1',
            'type' =>  '1',
            'image' => '1655540624.74.jpg',
            
        ]);
        DB::table('rooms')->insert([
            'image' => '1655557021.2421.jpg',
            'code' => '34',
            'floor' => '3',
            'cost' =>  '200.00',
            'status' => '2',
            'TV' => '1',
            'bids' => '3',
            'wifi' =>  '1',
            'parking' =>  '1',
            'AC' =>  '1',
            'pool' =>  '0',
            'type' =>  '1',
            
            
        ]);
        DB::table('rooms')->insert([
            'image' => '1655618244.5872.jpg',
            'code' => '34',
            'floor' => '3',
            'cost' =>  '200.00',
            'status' => '1',
            'TV' => '1',
            'bids' => '3',
            'wifi' =>  '1',
            'parking' =>  '1',
            'AC' =>  '1',
            'pool' =>  '1',
            'type' =>  '2',
            
            
        ]);
        DB::table('rooms')->insert([
            'image' => '1655367137.6123.jpg',
            'code' => '34',
            'floor' => '3',
            'cost' =>  '200.00',
            'status' => '1',
            'TV' => '1',
            'bids' => '3',
            'wifi' =>  '1',
            'parking' =>  '1',
            'AC' =>  '1',
            'pool' =>  '0',
            'type' =>  '0',
            
            
        ]);
        DB::table('rooms')->insert([
            'image' => 'rooms-1.jpg',
            'code' => '34',
            'floor' => '3',
            'cost' =>  '200.00',
            'status' => '2',
            'TV' => '1',
            'bids' => '3',
            'wifi' =>  '1',
            'parking' =>  '1',
            'AC' =>  '1',
            'pool' =>  '1',
            'type' =>  '2',
            
            
        ]);
        DB::table('rooms')->insert([
            'image' => 'rooms-2.jpg',
            'code' => '34',
            'floor' => '3',
            'cost' =>  '200.00',
            'status' => '1',
            'TV' => '1',
            'bids' => '3',
            'wifi' =>  '1',
            'parking' =>  '1',
            'AC' =>  '0',
            'pool' =>  '1',
            'type' =>  '0',
            
            
        ]);
        DB::table('rooms')->insert([
            'image' => 'rooms-3.jpg',
            'code' => '34',
            'floor' => '3',
            'cost' =>  '200.00',
            'status' => '1',
            'TV' => '1',
            'bids' => '3',
            'wifi' =>  '1',
            'parking' =>  '0',
            'AC' =>  '1',
            'pool' =>  '0',
            'type' =>  '1',
            
            
        ]);
    }
}
