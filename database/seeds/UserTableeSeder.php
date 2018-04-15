<?php

use Illuminate\Database\Seeder;

class UserTableeSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // set foreign key 0 if use mysql
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // $this->call(UsersTableSeeder::class);
        DB::table('users')->truncate();

        // insert dan query user
        DB::table('users')->insert([
            [
                'name'     => 'Rosadi',
                'email'    => 'rosadi90@gmail.com',
                'password' => bcrypt('1234')
            ],
            [
                'name'     => 'Ramdani',
                'email'    => 'dani0@gmail.com',
                'password' => bcrypt('1234')
            ],
            [
                'name'     => 'Rizal',
                'email'    => 'rizal@gmail.com',
                'password' => bcrypt('4321')
            ]
            ]);

        // set foreign key 0 if use mysql
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
