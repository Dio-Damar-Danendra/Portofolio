<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('accounts')->insert([
            [
                'first_name' => 'Admin',
                'middle_name' => 'Dio Damar',
                'last_name' => 'Danendra',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('admindio1'),
                'display_picture_link' => 'web.com/images/pic.jpg',
                'delete_flag' => 0,
                'isAdmin' => true
            ],
            [
                'first_name' => 'Final',
                'last_name' => 'Final Exam',
                'email' => 'user@gmail.com',
                'password' => \Hash::make('finalexam2'),
                'delete_flag' => 1,
                'isAdmin' => false
            ]
        ]);
    }
}
