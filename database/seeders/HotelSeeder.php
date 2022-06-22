<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('hotels')->insert([
           
            'logo' => 'logo1.png',
            'street' => '21',
            'address' =>  'jamal street',
            'city' => 'Taiz',
            'country' => 'Yemen',
            'reception' => '+1 (603)535-4592',
            'service' =>  '+1 (603)535-4592',
            'Restaurant' =>  '+1 (603)535-4592',
            'description' =>  'Event Hotel offers fast and convenient service
            Healthy and safe environment
            fast service
            Multiple entertainment
            Swimming pools and saunas
            Banquet halls and events equipped with the latest technology
            Fully prepared to coordinate all kinds of events',
            
            
        ]);
    }
}
