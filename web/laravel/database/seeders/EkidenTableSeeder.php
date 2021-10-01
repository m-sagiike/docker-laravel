<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EkidenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ekidens')->insert([
            [
                'ekiden_name' => '出雲全日本大学選抜駅伝競走(出雲駅伝)',
                'created_at'  => Carbon::now(),
            ],
            [
                'ekiden_name' => '秩父宮賜杯 全日本大学駅伝対校選手権大会(全日本大学駅伝)',
                'created_at'  => Carbon::now(),
            ],
            [
                'ekiden_name' => '東京箱根間往復大学駅伝競走(箱根駅伝)',
                'created_at'  => Carbon::now(),
            ],
        ]);
    }
}
