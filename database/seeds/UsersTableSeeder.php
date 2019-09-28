<?php

use App\User;
use Illuminate\Database\Seeder;

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
        $data = [
            'name' => 'admin admin',
            'email' => 'admin@eefuto.com',
            'password' => bcrypt('password')
        ];

        User::create($data);
    }
}
