<?php

use Illuminate\Database\Seeder;

class reservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [
            'ReservationID'=>1,
            'TrimmerID'=>1,
            'DogID'=>1,
            'ReservationDateAndTime'=> new DateTime(),
            ],
            [
                'ReservationID' => 2,
                'TrimmerID' => 2,
                'DogID' => 2,
                'ReservationDateAndTime' => new DateTime(),
            ],
        ]);
    }
}
