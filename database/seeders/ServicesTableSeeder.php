<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Basic Info',
                'fields' => json_encode([
                    ['name' => 'name', 'type' => 'text', 'placeholder' => 'Full Name'],
                    ['name' => 'email', 'type' => 'email', 'placeholder' => 'Email Address'],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PWD Form',
                'fields' => json_encode([
                    ['name' => 'pwd_number', 'type' => 'text', 'placeholder' => 'PWD Number'],
                    ['name' => 'type_of_disability', 'type' => 'select', 'options' => ['Deaf', 'Blind']],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}