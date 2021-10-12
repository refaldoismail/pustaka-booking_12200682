<?php
namespace App\Database\Seeds;

use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'     => 'Refaldo',
                'password' => md5('12200682')
            ],
            [   'nama'     => 'admin',
                'password' => md5('12345')
            ],
            [  'nama'      => '12200682',
                'password' => md5('Refaldoismail')
            ]
        ];
            $p = new PenggunaModel();
            $p->insertBatch($data);
    }
}
