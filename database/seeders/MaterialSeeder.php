<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\Rak;

class MaterialSeeder extends Seeder
{
    public function run() : void
    {
        // Ambil semua rak dari database
        $raks = Rak::all();

        // Loop untuk membuat 300 data materials
        for ($i = 0; $i < 300; $i++) {
            // Ambil rak secara acak dari koleksi $raks
            $rak = $raks->random();

            // Buat data material baru
            $material = new Material();
            $material->rak_id = $rak->id;
            $material->item_number = 'RMI.WH.' . str_pad(rand(0, 99), 2, '0', STR_PAD_LEFT) . '.' . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);
            $material->part_number = 'MT-' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
            $material->product_name = 'TERM.' . str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
            $material->panjang = rand(10, 99);
            $material->lebar = rand(10, 99);
            $material->tinggi = rand(10, 99);
            // $material->jr = rand(0, 99);
            $material->jr = null;
            $material->qty_box = rand(100, 999);
            $material->qty_pack = rand(10, 99);
            $material->berat = null;
            // $material->volume = $material->panjang * $material->lebar * $material->tinggi * $material->jr;
            $material->volume = $material->panjang * $material->lebar * $material->tinggi;
            $material->total_volume = $material->volume * $material->qty_box;

            $material->save();
        }
    }
}
