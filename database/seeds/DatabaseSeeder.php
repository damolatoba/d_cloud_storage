<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::insert('insert into file_types (id, type, created_at) values (?, ?, ?)', [1, 'audios', date("Y-m-d H:i:s")]);
        DB::insert('insert into file_types (id, type, created_at) values (?, ?, ?)', [2, 'videos', date("Y-m-d H:i:s")]);
        DB::insert('insert into file_types (id, type, created_at) values (?, ?, ?)', [3, 'docs', date("Y-m-d H:i:s")]);


        DB::insert('insert into file_types_extensions (id, extension, type_id, created_at) values (?, ?, ?, ?)', [1, 'mp3', 1, date("Y-m-d H:i:s")]);
        DB::insert('insert into file_types_extensions (id, extension, type_id, created_at) values (?, ?, ?, ?)', [2, 'mp4', 2, date("Y-m-d H:i:s")]);
        DB::insert('insert into file_types_extensions (id, extension, type_id, created_at) values (?, ?, ?, ?)', [3, 'pdf', 3, date("Y-m-d H:i:s")]);
        DB::insert('insert into file_types_extensions (id, extension, type_id, created_at) values (?, ?, ?, ?)', [4, 'txt', 3, date("Y-m-d H:i:s")]);

    }
}
