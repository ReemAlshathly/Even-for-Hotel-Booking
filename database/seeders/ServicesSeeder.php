<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('services')->insert([
            'name' => 'Outdoor Pool',
            'type' => 'external',
            'cost' => '20.00',
            'pic' =>  '1655621532.6315.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'Restaurant',
            'type' => 'external',
            'cost' => '50.00',
            'pic' =>  '1655621574.0029.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'Coffee Shop',
            'type' => 'external',
            'cost' => '10.00',
            'pic' =>  '1655621620.1004.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'Executive Conference Room',
            'type' => 'intirnal',
            'cost' => '200.00',
            'pic' =>  '1655621662.8743.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'Events Conference Venue',
            'type' => 'intirnal',
            'cost' => '250.00',
            'pic' =>  '1655621703.0822.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'Weddings',
            'type' => 'intirnal',
            'cost' => '500.00',
            'pic' =>  '1655621740.0971.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'Gym',
            'type' => 'intirnal',
            'cost' => '15.00',
            'pic' =>  '1655622757.9786.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'SAUNA',
            'type' => 'intirnal',
            'cost' => '15.00',
            'pic' =>  '1655623479.797.jpg',
            
        ]);
        DB::table('services')->insert([
            'name' => 'Organizing events',
            'type' => 'intirnal',
            'cost' => '70.00',
            'pic' =>  '1655623729.7215.jpg',
            
        ]);
    }
}
