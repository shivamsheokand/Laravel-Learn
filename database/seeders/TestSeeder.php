<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            DB::table('tests')->insert([
            "name"=>Str::random(10),
            "password"=>Str::random(10),
            "email"=>Str::random(10).'@gmai.com',
        ]);
        }
    }
}
