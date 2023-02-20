<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $signs = [
            [
                'sign' => 'Aries',
                'start_date' => "3-21",
                'end_date' => "4-19",
            ],
            [
                'sign' => 'Taurus',
                'start_date' => "4-20",
                'end_date' => "5-20",
            ],
            [
                'sign' => 'Gemini',
                'start_date' => "5-21",
                'end_date' => "6-21",
            ],
            [
                'sign' => 'Cancer',
                'start_date' => "6-22",
                'end_date' => "7-22",
            ],
            [
                'sign' => 'Leo',
                'start_date' => "7-23",
                'end_date' => "8-22",
            ],
            [
                'sign' => 'Virgo',
                'start_date' => "8-23",
                'end_date' => "9-22",
            ],
            [
                'sign' => 'Libra',
                'start_date' => "9-23",
                'end_date' => "10-23",
            ],
            [
                'sign' => 'Scorpio',
                'start_date' => "10-24",
                'end_date' => "11-21",
            ],
            [
                'sign' => 'Sagittarius',
                'start_date' => "11-22",
                'end_date' => "12-21",
            ],
            [
                'sign' => 'Capricorn',
                'start_date' => "12-22",
                'end_date' => "1-19",
            ],
            [
                'sign' => 'Aquarius',
                'start_date' => "1-20",
                'end_date' => "2-18",
            ],
            [
                'sign' => 'Pisces',
                'start_date' => "2-19",
                'end_date' => "3-20",
            ],
        ];

        foreach ($signs as $sign) {
            DB::table('signs')->insert($sign);
        }
    }
}
