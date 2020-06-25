<?php

use Illuminate\Database\Seeder;

class dogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            [
            'OwnerID'=>1,
            'DogID' => 1,
            'DogName' => 'ハナ',
            'type' => 'チワワ',
            'color' => '白',
            'DogBirthday' => 20200101,
            'DogGender' => 'メス',
            'personality' => '大人しい'
            ],
            [
            'OwnerID'=>1,
            'DogID' => 2,
            'DogName' => 'モコ',
            'type' => 'チワワ',
            'color' => 'ブラックタン',
            'DogBirthday' => 20200101,
            'DogGender' => 'メス',
            'personality' => '大人しい'
            ],
            [
            'OwnerID'=>2,
            'DogID' => 3,
            'DogName' => 'シナモン',
            'type' => '柴犬',
            'color' => '赤',
            'DogBirthday' => 20180101,
            'DogGender' => 'オス',
            'personality' => '爪切りキライ'
            ]
        ]);
    }
}
