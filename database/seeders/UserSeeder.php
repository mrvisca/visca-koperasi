<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Visca Putra',
                'email' => 'bimasaktiputra@mrvisca.tech',
                'password' => Hash::make('11223344'),
                'role_id' => 1,
                'email_verified_at' => '2023-11-25 23:08:00'
            ],
            [
                'id' => 2,
                'name' => 'Dodo Kencana',
                'email' => 'bimasaktiputra95@gmail.com',
                'password' => Hash::make('11223344'),
                'role_id' => 2,
                'email_verified_at' => '2023-11-25 23:08:00'
            ],
        ];

        User::insert($data);
    }
}
