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
                'pageText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sem et tortor consequat id porta. Habitant morbi tristique senectus et. Sed tempus urna et pharetra pharetra. Bibendum neque egestas congue quisque egestas diam in. In iaculis nunc sed augue. Magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Feugiat sed lectus vestibulum mattis ullamcorper velit. Interdum varius sit amet mattis vulputate enim nulla aliquet. Tellus pellentesque eu tincidunt tortor aliquam. Semper viverra nam libero justo laoreet sit amet cursus sit. Molestie at elementum eu facilisis sed odio morbi. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet.',
                'image' => 'Photo-01',
                'user_id' => 1,
            ],
            [
                'pageTitle' => 'Title 02',
                'pageText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sem et tortor consequat id porta. Habitant morbi tristique senectus et. Sed tempus urna et pharetra pharetra. Bibendum neque egestas congue quisque egestas diam in. In iaculis nunc sed augue. Magnis dis parturient montes nascetur ridiculus mus mauris. Pulvinar neque laoreet suspendisse interdum consectetur. Facilisi nullam vehicula ipsum a arcu cursus vitae congue mauris. Feugiat sed lectus vestibulum mattis ullamcorper velit. Interdum varius sit amet mattis vulputate enim nulla aliquet. Tellus pellentesque eu tincidunt tortor aliquam. Semper viverra nam libero justo laoreet sit amet cursus sit. Molestie at elementum eu facilisis sed odio morbi. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet.',
                'image' => 'Photo-02',
                'user_id' => 2,
            ]
            ]);
    }
}

