<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i=0; $i < 50; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(25),
                'description' => STr::random(200),
                'status' => 1,
                'published_date' => date('Y-m-d'),
                'user_id' => 1
            ]);
        }

    }
}
