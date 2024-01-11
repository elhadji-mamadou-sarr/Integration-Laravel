<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Diop',
             'email' => 'admin@gmail.com',
             'prenom' => 'Abdou Laye',
             'telephone' => '77851122',
             'password' => Hash::make('admin'),
             'profil' => 1,
         ]);


        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }



}
