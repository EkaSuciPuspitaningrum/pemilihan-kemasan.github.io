<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\CalonPakar;
use App\Models\Pakar;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
                'name' => 'Admin',
                'role' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'adminkemasan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"), 
                // 'password' => Hash::make('adminkemasan'),
        ]);
        
    }
}
