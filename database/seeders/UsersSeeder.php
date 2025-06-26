<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $playerId = DB::table('roles')->where('name', 'client')->value('id');
        $adminId = DB::table('roles')->where('name', 'admin')->value('id');
        $ownerID = DB::table('roles')->where('name', 'owner')->value('id');

        User::insert([
            //players
            [
                "name" => "Minecrafter 1",
                "role_id" => $playerId,
                "images" => 'gamer1.png',
                'email' => 'player1@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(60),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Minecrafter 2",
                "role_id" => $playerId,
                "images" => 'gamer2.png',
                'email' => 'player2@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password12'),
                'remember_token' => Str::random(60),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Minecrafter 3",
                "role_id" => $playerId,
                "images" => 'gamer1.png',
                'email' => 'player43@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password1230dk3'),
                'remember_token' => Str::random(60),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // owner
            [
                "name" => "Onwe Michael",
                "role_id" => $ownerID,
                "images" => 'gamer1.png',
                'email' => 'onwer_email290@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(60),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // admin
            [
                "name" => "Adminer Iwont",
                "role_id" => $adminId,
                "images" => 'addminer.png',
                'email' => 'minecrafter@example.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(60),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
