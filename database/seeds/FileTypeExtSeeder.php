<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FileTypeExtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file_types_extensions')->insert([
            'extension' => 'mp3',
            'type_id' => 1
        ]);

        DB::table('file_types_extensions')->insert([
            'extension' => 'mp4',
            'type_id' => 2
        ]);

        DB::table('file_types_extensions')->insert([
            'extension' => 'pdf',
            'type_id' => 3
        ]);

        DB::table('file_types_extensions')->insert([
            'extension' => 'txt',
            'type_id' => 3
        ]);
    }
}
