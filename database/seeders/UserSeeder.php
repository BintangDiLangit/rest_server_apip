<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'apipppp',
            'no_hp' => '97321478324',
            'is_admin' => 1,
            'email' => 'apip@apip.com',
            'password' => bcrypt('password')
        ]);
    }
}