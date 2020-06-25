<?php

use Illuminate\Database\Seeder;

class trimmersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trimmers')->insert([
            [
            'TrimmerID'=>1,
            'TrimmerName'=>'山田',
            'TrimmerHistory'=>2,
            'nominate'=>500,
            ],
            [
                'TrimmerID' => 2,
                'TrimmerName' => '佐々木',
                'TrimmerHistory' => 5,
                'nominate' => 800,
            ],
            [
                'TrimmerID' => 3,
                'TrimmerName' => '岡本',
                'TrimmerHistory' => 10,
                'nominate' => 1200,
            ],
            [
                'TrimmerID' => 4,
                'TrimmerName' => '小野',
                'TrimmerHistory' => 8,
                'nominate' => 1000,
            ],
        ]);
    }
}
