<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'category_id' => '1',
            'title' => 'Belajar Otodidak Mysql Edisi Kedua'
        ]);

        DB::table('books')->insert([
            'category_id' => '1',
            'title' => 'Machine Learning Untuk Pemula'
        ]);

        DB::table('books')->insert([
            'category_id' => '1',
            'title' => 'PHP Edisi Lengkap'
        ]);

        DB::table('books')->insert([
            'category_id' => '2',
            'title' => 'Sihir Mesir Ditanah Jawa'
        ]);

        DB::table('books')->insert([
            'category_id' => '2',
            'title' => 'Snow Dancer'
        ]);

        DB::table('books')->insert([
            'category_id' => '2',
            'title' => 'Summer Triangle'
        ]);

        DB::table('books')->insert([
            'category_id' => '3',
            'title' => 'Salt To The Sea'
        ]);

        DB::table('books')->insert([
            'category_id' => '3',
            'title' => 'Secret Techniques Of The Elite Forces'
        ]);

        DB::table('books')->insert([
            'category_id' => '3',
            'title' => 'All The Light We Cannot See'
        ]);

        DB::table('books')->insert([
            'category_id' => '5',
            'title' => 'Love Your Life'
        ]);

        DB::table('books')->insert([
            'category_id' => '5',
            'title' => 'Pachinko'
        ]);

        DB::table('books')->insert([
            'category_id' => '5',
            'title' => 'Bukan Cinderella'
        ]);
    }
}
