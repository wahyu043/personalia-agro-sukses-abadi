<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;
use Carbon\Carbon;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nip' => '99900001',
                'nama_lengkap' => 'Karyawan Dummy 1',
                'jabatan' => 'CEO',
                'divisi' => null,
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900002',
                'nama_lengkap' => 'Karyawan Dummy 2',
                'jabatan' => 'Manajer Keuangan',
                'divisi' => 'Keuangan',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900003',
                'nama_lengkap' => 'Karyawan Dummy 3',
                'jabatan' => 'Direktur Utama',
                'divisi' => null,
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900004',
                'nama_lengkap' => 'Karyawan Dummy 4',
                'jabatan' => 'Manajer Produksi',
                'divisi' => 'Produksi',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900005',
                'nama_lengkap' => 'Karyawan Dummy 5',
                'jabatan' => 'SPV Produksi',
                'divisi' => 'Produksi',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900006',
                'nama_lengkap' => 'Karyawan Dummy 6',
                'jabatan' => 'SPV Gudang',
                'divisi' => 'Produksi',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900007',
                'nama_lengkap' => 'Karyawan Dummy 7',
                'jabatan' => 'Operator Produksi',
                'divisi' => 'Produksi',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900008',
                'nama_lengkap' => 'Karyawan Dummy 8',
                'jabatan' => 'Operator Packing',
                'divisi' => 'Produksi',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900009',
                'nama_lengkap' => 'Karyawan Dummy 9',
                'jabatan' => 'Operator Produksi',
                'divisi' => 'Produksi',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900010',
                'nama_lengkap' => 'Karyawan Dummy 10',
                'jabatan' => 'Delivery',
                'divisi' => 'Produksi',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900011',
                'nama_lengkap' => 'Karyawan Dummy 11',
                'jabatan' => 'SPV Marketing',
                'divisi' => 'Marketing',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900012',
                'nama_lengkap' => 'Karyawan Dummy 12',
                'jabatan' => 'SEO',
                'divisi' => 'Marketing',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900013',
                'nama_lengkap' => 'Karyawan Dummy 13',
                'jabatan' => 'Sales Executive',
                'divisi' => 'Marketing',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900014',
                'nama_lengkap' => 'Karyawan Dummy 14',
                'jabatan' => 'Staff Keuangan',
                'divisi' => 'Keuangan',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900015',
                'nama_lengkap' => 'Karyawan Dummy 15',
                'jabatan' => 'Admin Keuangan',
                'divisi' => 'Keuangan',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900016',
                'nama_lengkap' => 'Karyawan Dummy 16',
                'jabatan' => 'Staff Konten Kreator',
                'divisi' => 'Marketing',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900017',
                'nama_lengkap' => 'Karyawan Dummy 17',
                'jabatan' => 'Sales',
                'divisi' => 'Marketing',
                'tanggal_masuk' => '2020-01-01',
            ],
            [
                'nip' => '99900018',
                'nama_lengkap' => 'Karyawan Dummy 18',
                'jabatan' => 'Sales',
                'divisi' => 'Marketing',
                'tanggal_masuk' => '2020-01-01',
            ],
        ];

        foreach ($data as $row) {
            Karyawan::create($row);
        }
    }
}