<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        User::create(array(
            'name'      => 'Admin',
            'role'      => 'admin',
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => Hash::make('12345678'),
        ));
    }
}
