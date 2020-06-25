<?php

use Illuminate\Database\Seeder;

class ownersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
            'OwnerID'=>1,
            'DogID'=>1,
            'OwnerName'=>'鈴木花子',
            'StreetAddress'=>'○○県○○町',
            'OwnerGender'=>'女',
            'TEL'=>00011112222,
            'OwnerBirthday'=>19000101,
            'email'=>'test.mail',
            'password'=>'test-password',
            'FamilyHospital'=>'スマイル動物病院',
            'FirstVisit'=>20200101
            ],
            [
            'OwnerID' => 2,
            'DogID' => 3,
            'OwnerName' => '田中太郎',
            'StreetAddress' => '○○県○○町',
            'OwnerGender' => '男',
            'TEL' => 00011113333,
            'OwnerBirthday' => 19000202,
            'email' => 'test.mail',
            'password' => 'test-password-2',
            'FamilyHospital' => '田中動物病院',
            'FirstVisit' => 20200102
            ],
        ]);
    }
}
