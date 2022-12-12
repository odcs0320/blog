<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Cgy;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Cgyseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cgy::truncate(); //把所有資料清空,並重置主機
        $faker = Factory::create('zh_TW');

        Cgy::factory()->times(100)->create();

    }
}
