<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Education'
        ]);

        DB::table('categories')->insert([
            'category' => 'Fiction'
        ]);

        DB::table('categories')->insert([
            'category' => 'History'
        ]);

        DB::table('categories')->insert([
            'category' => 'Kids'
        ]);

        DB::table('categories')->insert([
            'category' => 'Romance'
        ]);
    }
}
