<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Role::insert([
            'name'=> 'Admin',
            'created_at' => Carbon::now(),
        ]);
        Role::insert([
            'name'=> 'User',
            'created_at' => Carbon::now(),
        ]);

    }
}
