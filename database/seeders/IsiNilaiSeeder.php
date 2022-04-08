<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IsiNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $nilai = [
                [
                    'mahasiswa_id' => '2041720000',
                    'matakuliah_id' => 1,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720000',
                    'matakuliah_id' => 2,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720000',
                    'matakuliah_id' => 3,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720000',
                    'matakuliah_id' => 4,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720004',
                    'matakuliah_id' => 1,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720004',
                    'matakuliah_id' => 2,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720004',
                    'matakuliah_id' => 3,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720004',
                    'matakuliah_id' => 4,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720009',
                    'matakuliah_id' => 1,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720009',
                    'matakuliah_id' => 2,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720009',
                    'matakuliah_id' => 3,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720009',
                    'matakuliah_id' => 4,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720030',
                    'matakuliah_id' => 1,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720030',
                    'matakuliah_id' => 2,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720030',
                    'matakuliah_id' => 3,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720030',
                    'matakuliah_id' => 4,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720115',
                    'matakuliah_id' => 1,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720115',
                    'matakuliah_id' => 2,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720115',
                    'matakuliah_id' => 3,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720115',
                    'matakuliah_id' => 4,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720116',
                    'matakuliah_id' => 1,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720116',
                    'matakuliah_id' => 2,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720116',
                    'matakuliah_id' => 3,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720116',
                    'matakuliah_id' => 4,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720120',
                    'matakuliah_id' => 1,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720120',
                    'matakuliah_id' => 2,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720120',
                    'matakuliah_id' => 3,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720120',
                    'matakuliah_id' => 4,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720160',
                    'matakuliah_id' => 1,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720160',
                    'matakuliah_id' => 2,
                    'nilai' => 'A',
                ],
                [
                    'mahasiswa_id' => '2041720160',
                    'matakuliah_id' => 3,
                    'nilai' => 'B',
                ],
                [
                    'mahasiswa_id' => '2041720160',
                    'matakuliah_id' => 4,
                    'nilai' => 'A',
                ]
            ];
            DB::table('mahasiswa_matakuliah')->insert($nilai);
        }
    }
}
