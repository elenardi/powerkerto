<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = [
            [
                'name'     => 'Administrator',
                'username' => 'admin',
                'role'     => 'admin',
                'email'    => 'admin@admin.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name'     => 'Advertise',
                'username' => 'adv',
                'role'     => 'adv',
                'email'    => 'adv@adv.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name'     => 'Customer Service',
                'username' => 'cs',
                'role'     => 'cs',
                'email'    => 'cs@cs.com',
                'password' => Hash::make('12345678'),
            ]
            ];
        User::insert($user);
    }
}
