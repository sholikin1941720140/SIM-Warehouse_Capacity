<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rakData = [];
        $batchSize = 200; // Ukuran batch yang aman (kurang dari 210 baris)

        // Fungsi untuk insert batch data
        $insertBatch = function ($data) {
            DB::table('raks')->insert($data);
        };

        // Fungsi untuk menambah data ke batch dan insert jika batch penuh
        $addToBatch = function ($data) use (&$rakData, $insertBatch, $batchSize) {
            $rakData[] = $data;
            if (count($rakData) >= $batchSize) {
                $insertBatch($rakData);
                $rakData = [];
            }
        };

        // Alamat Rak A
        foreach (range(1, 3) as $row) {
            foreach (range(1, 42) as $col) {
                if ($col > 22 && ($row == 1 || $row == 2)) {
                    continue; // Skip non-existing columns for A.1 and A.2 rows
                }

                $panjang = rand(300, 500);
                $lebar = rand(300, 500);
                $tinggi = rand(300, 500);
                $tinggi_atas = null;
                $tinggi_total = $tinggi; // Default ke tinggi jika tidak ada tinggi_atas

                if ($row == 3) {
                    $tinggi_atas = rand(400, 600);
                    $tinggi_total = $tinggi + $tinggi_atas;
                }

                $addToBatch([
                    'kode' => 'A',
                    'alamat' => "A.$row.$col",
                    'panjang' => $panjang,
                    'lebar' => $lebar,
                    'tinggi' => $tinggi,
                    'tinggi_atas' => $tinggi_atas,
                    'tinggi_total' => $tinggi_total,
                    'volume' => $panjang * $lebar * $tinggi_total,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        // Alamat Rak B
        foreach (range(1, 3) as $row) {
            foreach (range(1, 48) as $col) {
                $panjang = rand(300, 500);
                $lebar = rand(300, 500);
                $tinggi = rand(300, 500);
                $tinggi_atas = null;
                $tinggi_total = $tinggi; // Default ke tinggi jika tidak ada tinggi_atas

                if ($row == 3) {
                    $tinggi_atas = rand(400, 600);
                    $tinggi_total = $tinggi + $tinggi_atas;
                }

                $addToBatch([
                    'kode' => 'B',
                    'alamat' => "B.$row.$col",
                    'panjang' => $panjang,
                    'lebar' => $lebar,
                    'tinggi' => $tinggi,
                    'tinggi_atas' => $tinggi_atas,
                    'tinggi_total' => $tinggi_total,
                    'volume' => $panjang * $lebar * $tinggi_total,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        // Alamat Rak C
        foreach (range(1, 3) as $row) {
            foreach (range(1, 37) as $col) {
                $panjang = rand(300, 500);
                $lebar = rand(300, 500);
                $tinggi = rand(300, 500);
                $tinggi_atas = null;
                $tinggi_total = $tinggi; // Default ke tinggi jika tidak ada tinggi_atas

                if ($row == 3) {
                    $tinggi_atas = rand(400, 600);
                    $tinggi_total = $tinggi + $tinggi_atas;
                }

                $addToBatch([
                    'kode' => 'C',
                    'alamat' => "C.$row.$col",
                    'panjang' => $panjang,
                    'lebar' => $lebar,
                    'tinggi' => $tinggi,
                    'tinggi_atas' => $tinggi_atas,
                    'tinggi_total' => $tinggi_total,
                    'volume' => $panjang * $lebar * $tinggi_total,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        // Insert remaining data
        if (!empty($rakData)) {
            $insertBatch($rakData);
        }
    }
}
