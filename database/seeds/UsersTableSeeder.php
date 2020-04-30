<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'   => '1',
            'name'      => 'Admin',
            'username'   => 'Alpha',
            'email'      => 'alphonso2009@gmail.com',
            'password'    => bcrypt('alpha@123'),
        ]);
        DB::table('users')->insert([
            'role_id'   => '2',
            'name'      => 'Author',
            'username'   => 'Rider',
            'email'      => 'rider@gmail.com',
            'password'    => bcrypt('rider@123'),
        ]);
    }
}
