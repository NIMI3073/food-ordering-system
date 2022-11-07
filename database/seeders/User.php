<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Olakitan',
                'email' => 'olakitan@gmail.com',
                'answer' =>'08174259812',
                'password' => 1111
            ],

            [
                'name' => 'Kitan',
                'email' => 'kitan@gmail.com',
                'answer' =>'08174259814',
                'password' => 1111
            ],
           
            ]);
    }

    }

