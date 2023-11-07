<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::table('casts')->insert([
            'name' => 'u.n.owen',
			'email' => 'hogefuga@example.com',
			'watchword' => 'ramentaro'
        ]);
    }
}
