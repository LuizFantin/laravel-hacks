<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Factory;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Order::factory(20)->create();
    }
}
