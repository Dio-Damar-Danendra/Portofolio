<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ebooks')->insert([
            [
                'ebook_id' => '1',
                'title' => 'Compilers - Principles, Techniques, and Tools',
                'author' => 'Alfred V. Aho, Monica S. Lam, Ravi Sethi, Jeffrey D. Ullman',
                'description' => 'Compilers: Principles, Techniques, and Tools is a computer science textbook by Alfred V. Aho, Monica S. Lam, Ravi Sethi, and Jeffrey D. Ullman about compiler construction for programming languages. First published in 1986, it is widely regarded as the classic definitive compiler technology text.'
            ]
        ]);
    }
}
