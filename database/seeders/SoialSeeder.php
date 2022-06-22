<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class SoialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('soials')->insert([
           
            'email' => 'eventhotel@gmail.com',
            'onlinefrom' => '08',
            'onlineto' =>  '22',
            'facebook' => 'https://www.facebook.com/EventHotel/',
            'instagram' => 'https://www.instagram.com/EventHotel/',
            'linkedin' => 'https://www.linkedin.com/EventHotel/',
            'twitter' =>  'https://www.twitter.com/EventHotel/',
            'youtube' =>  'https://www.youtube.com/EventHotel/',
            'location' =>  'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31026.151031651076!2d44.03887727857852!3d13.580377727672193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3bfe8f38ede7451!2zMTPCsDM0JzQ5LjQiTiA0NMKwMDAnMTguNCJF!5e0!3m2!1sar!2s!4v1655708178054!5m2!1sar!2s',
            
            
        ]);
    }
}
