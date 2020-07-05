<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Fitra '.Str::random(10),
            'email' => 'fitra.'.Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
