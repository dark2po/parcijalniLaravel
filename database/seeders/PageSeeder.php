<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'pageTitle' => 'Title 01',
                'pageText' => 'Text 01',
                'photoPath' => '/storage/app/public',
                'photoName' => 'Photo 01',
                'user_id' => 1,
            ],
            [
                'pageTitle' => 'Title 02',
                'pageText' => 'Text 03',
                'photoPath' => '/storage/app/public',
                'photoName' => 'Photo 03',
                'user_id' => 2,
            ]
            ]);
    }
}

