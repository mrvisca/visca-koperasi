<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
                'name' => 'Administrator',
                'desc' => 'Admininistrator Aplikasi untuk mengelola semua akses dan kinerja aplikasi koperasi',
            ],
            [
                'id' => 2,
                'name' => 'Customer Service',
                'desc' => 'Customer Service untuk pengelolaan simpan pinjam nasabah',
            ],
            [
                'id' => 3,
                'name' => 'Dept Collection',
                'desc' => 'Pihak lapangan untuk survei lapangan terkait simpanan, pinjaman nasabah atau penagihan pinjaman nasabah',
            ],
            [
                'id' => 4,
                'name' => 'Nasabah',
                'desc' => 'Nasabah simpanan / pinjaman koperasi',
            ],
        ];

        Role::insert($data);
    }
}
