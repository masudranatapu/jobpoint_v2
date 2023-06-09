<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert([
            'role_id'=> '1',
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
        ]);
        User::insert([
            'role_id'=> '2',
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
        ]);

    }
}
