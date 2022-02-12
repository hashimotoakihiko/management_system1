<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use  App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class,15)->create();
        \App\Models\User::factory()->count(15)->create();
       
    }
}
