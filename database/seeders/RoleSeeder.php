<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->insert([
            [
                'order_id' => '1',
                'gender_desc' => 'Male'
            ],
            [
                'gender_id' => '2',
                'gender_desc' => 'Female'
            ]
        ]);
    }
}
