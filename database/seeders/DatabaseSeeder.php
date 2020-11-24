<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::create([
            'name' => 'Luiz',
            'email' => 'teste@gmail.com',
            'password' => Hash::make(123456)
        ]);

        // \App\Models\User::factory(10)->create();
        $this->call(OrderTableSeeder::class);
    }
}
