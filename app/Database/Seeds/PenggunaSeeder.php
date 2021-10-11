<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          => 'emen',
                'password'      => md5('12200061')
            ],
            [
                'nama'          => 'emen',
                'password'      => md5('12200061')
            ],
            [
                'nama'          => 'emen',
                'password'      => md5('12200061')
            ],
        ];
        $p = new Pengguna();
        $p->insertBatch();
    }
}
