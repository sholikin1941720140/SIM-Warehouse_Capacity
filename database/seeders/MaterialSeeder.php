<?php

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MaterialSeeder extends Seeder
{
    public function run() : void
    {
        $racks = array_merge(
            array_map(fn($i) => "A.1.$i", range(1, 22)),
            array_map(fn($i) => "B.1.$i", range(1, 22)),
            array_map(fn($i) => "C.1.$i", range(1, 22))
        );

        $data = [
            ['item_number' => 'RMI.WH.00.00000018', 'part_number' => '3FBCLIP07W', 'product_name' => 'FUSE PULLER', 'panjang' => 49.00, 'lebar' => 34.00, 'tinggi' => 25.00, 'jr' => 0.00, 'volume' => 41650.0000, 'qty_box' => 57000.00, 'qty_pack' => 100.00, 'qty_berat' => 1.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000032', 'part_number' => '51253BL2', 'product_name' => '51253BL2/33822-13H00', 'panjang' => 28.00, 'lebar' => 28.00, 'tinggi' => 33.00, 'jr' => 0.00, 'volume' => 25872.0000, 'qty_box' => 0.00, 'qty_pack' => 400.00, 'qty_berat' => 3.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000034', 'part_number' => '5R548690BL0', 'product_name' => '2PV-H2103-00', 'panjang' => 30.00, 'lebar' => 28.00, 'tinggi' => 17.00, 'jr' => 0.00, 'volume' => 14280.0000, 'qty_box' => 2000.00, 'qty_pack' => 500.00, 'qty_berat' => 5.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000036', 'part_number' => '5R90A540BL8', 'product_name' => 'TERM. 8982111770', 'panjang' => 30.00, 'lebar' => 28.00, 'tinggi' => 17.00, 'jr' => 0.00, 'volume' => 14280.0000, 'qty_box' => 500.00, 'qty_pack' => 100.00, 'qty_berat' => 27.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000037', 'part_number' => '5R90A550BL8', 'product_name' => 'TERM. 8982111780', 'panjang' => 30.00, 'lebar' => 28.00, 'tinggi' => 17.00, 'jr' => 0.00, 'volume' => 14280.0000, 'qty_box' => 500.00, 'qty_pack' => 100.00, 'qty_berat' => 32.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000039', 'part_number' => '6604202BS2', 'product_name' => '6604202BS2', 'panjang' => 27.00, 'lebar' => 27.00, 'tinggi' => 50.00, 'jr' => 0.00, 'volume' => 36450.0000, 'qty_box' => 24000.00, 'qty_pack' => 8000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000044', 'part_number' => '605090BS0', 'product_name' => '605090BS0', 'panjang' => 60.00, 'lebar' => 20.00, 'tinggi' => 60.00, 'jr' => 0.00, 'volume' => 72000.0000, 'qty_box' => 20000.00, 'qty_pack' => 5000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000046', 'part_number' => '610301BS2', 'product_name' => '610301BS2', 'panjang' => 27.00, 'lebar' => 27.00, 'tinggi' => 50.00, 'jr' => 0.00, 'volume' => 36450.0000, 'qty_box' => 8000.00, 'qty_pack' => 2000.00, 'qty_berat' => 1.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000052', 'part_number' => '6604002BS2', 'product_name' => 'TERM. 6604002BS2', 'panjang' => 27.00, 'lebar' => 27.00, 'tinggi' => 50.00, 'jr' => 0.00, 'volume' => 36450.0000, 'qty_box' => 30000.00, 'qty_pack' => 10000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000058', 'part_number' => '6610901BS2', 'product_name' => '730220-3', 'panjang' => 27.00, 'lebar' => 27.00, 'tinggi' => 50.00, 'jr' => 0.00, 'volume' => 36450.0000, 'qty_box' => 7500.00, 'qty_pack' => 2500.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000060', 'part_number' => '6617302BSS', 'product_name' => 'TERM. 6617302BSS', 'panjang' => 57.00, 'lebar' => 54.00, 'tinggi' => 21.00, 'jr' => 0.00, 'volume' => 64638.0000, 'qty_box' => 16000.00, 'qty_pack' => 4000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000079', 'part_number' => '8100-3083', 'product_name' => 'TERM. 8100-3083', 'panjang' => 63.00, 'lebar' => 18.00, 'tinggi' => 64.00, 'jr' => 0.00, 'volume' => 72576.0000, 'qty_box' => 32500.00, 'qty_pack' => 6500.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000083', 'part_number' => '8230-4925', 'product_name' => 'TERM. 8230-4925', 'panjang' => 63.00, 'lebar' => 23.00, 'tinggi' => 64.00, 'jr' => 0.00, 'volume' => 92736.0000, 'qty_box' => 30000.00, 'qty_pack' => 6000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000086', 'part_number' => '6878605BL0', 'product_name' => 'TERM. 6878605BL0', 'panjang' => 30.00, 'lebar' => 29.00, 'tinggi' => 19.00, 'jr' => 0.00, 'volume' => 16530.0000, 'qty_box' => 4000.00, 'qty_pack' => 500.00, 'qty_berat' => 3.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000101', 'part_number' => 'KM002 - 00140', 'product_name' => '8100-2746', 'panjang' => 20.00, 'lebar' => 22.00, 'tinggi' => 14.00, 'jr' => 0.00, 'volume' => 6160.0000, 'qty_box' => 250.00, 'qty_pack' => 50.00, 'qty_berat' => 50.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000115', 'part_number' => 'MR020 - 20400', 'product_name' => 'SLA-204', 'panjang' => 34.00, 'lebar' => 34.00, 'tinggi' => 34.00, 'jr' => 0.00, 'volume' => 39304.0000, 'qty_box' => 10000.00, 'qty_pack' => 5000.00, 'qty_berat' => 1.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000120', 'part_number' => 'MR020-20800', 'product_name' => 'SLA-208', 'panjang' => 34.00, 'lebar' => 34.00, 'tinggi' => 34.00, 'jr' => 0.00, 'volume' => 39304.0000, 'qty_box' => 6000.00, 'qty_pack' => 3000.00, 'qty_berat' => 1.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000122', 'part_number' => 'MR020 - 21000', 'product_name' => 'SLA-210', 'panjang' => 33.00, 'lebar' => 33.00, 'tinggi' => 17.00, 'jr' => 0.00, 'volume' => 18513.0000, 'qty_box' => 9000.00, 'qty_pack' => 1000.00, 'qty_berat' => 2.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000131', 'part_number' => 'MR020 - 30830', 'product_name' => 'SLA-308-SN', 'panjang' => 34.00, 'lebar' => 34.00, 'tinggi' => 34.00, 'jr' => 0.00, 'volume' => 39304.0000, 'qty_box' => 5000.00, 'qty_pack' => 2500.00, 'qty_berat' => 2.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000150', 'part_number' => 'MR074 - 50800', 'product_name' => 'SBA-508-60LS-N', 'panjang' => 40.00, 'lebar' => 28.00, 'tinggi' => 18.00, 'jr' => 0.00, 'volume' => 20160.0000, 'qty_box' => 1000.00, 'qty_pack' => 100.00, 'qty_berat' => 16.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000154', 'part_number' => 'MR121 - 40600', 'product_name' => 'SKA-406 R', 'panjang' => 26.00, 'lebar' => 26.00, 'tinggi' => 14.00, 'jr' => 0.00, 'volume' => 9464.0000, 'qty_box' => 500.00, 'qty_pack' => 100.00, 'qty_berat' => 7.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000178', 'part_number' => 'MR238 - 40830', 'product_name' => 'SLA-408-W-SN', 'panjang' => 58.00, 'lebar' => 58.00, 'tinggi' => 20.00, 'jr' => 0.00, 'volume' => 67280.0000, 'qty_box' => 1200.00, 'qty_pack' => 600.00, 'qty_berat' => 6.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000180', 'part_number' => 'MR403 - 10600', 'product_name' => 'YSLAM6STL-SN', 'panjang' => 63.00, 'lebar' => 18.00, 'tinggi' => 64.00, 'jr' => 0.00, 'volume' => 72576.0000, 'qty_box' => 5000.00, 'qty_pack' => 2500.00, 'qty_berat' => 2.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000185', 'part_number' => 'MT021 - 01200', 'product_name' => 'ACT-S', 'panjang' => 50.00, 'lebar' => 28.00, 'tinggi' => 29.00, 'jr' => 0.00, 'volume' => 40600.0000, 'qty_box' => 15000.00, 'qty_pack' => 5000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000191', 'part_number' => 'MT021 - 19000', 'product_name' => 'MM-0.3', 'panjang' => 50.00, 'lebar' => 33.00, 'tinggi' => 34.00, 'jr' => 0.00, 'volume' => 56100.0000, 'qty_box' => 18000.00, 'qty_pack' => 6000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000201', 'part_number' => 'MT025 - 01300', 'product_name' => 'ACR-W', 'panjang' => 50.00, 'lebar' => 28.00, 'tinggi' => 29.00, 'jr' => 0.00, 'volume' => 40600.0000, 'qty_box' => 15000.00, 'qty_pack' => 5000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000202', 'part_number' => 'MT025-03000', 'product_name' => 'MT025-03000/PCS-0.3', 'panjang' => 50.00, 'lebar' => 35.00, 'tinggi' => 34.00, 'jr' => 0.00, 'volume' => 59500.0000, 'qty_box' => 18000.00, 'qty_pack' => 6000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000213', 'part_number' => 'MT025 - 05200', 'product_name' => 'ACS-L-SN', 'panjang' => 50.00, 'lebar' => 35.00, 'tinggi' => 34.00, 'jr' => 0.00, 'volume' => 59500.0000, 'qty_box' => 9000.00, 'qty_pack' => 3000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000218', 'part_number' => '6605052BSS', 'product_name' => 'PLS-S-SN', 'panjang' => 27.00, 'lebar' => 27.00, 'tinggi' => 50.00, 'jr' => 0.00, 'volume' => 36450.0000, 'qty_box' => 15000.00, 'qty_pack' => 5000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000223', 'part_number' => 'MT025-19200', 'product_name' => 'MT025-19200/MF-S', 'panjang' => 50.00, 'lebar' => 35.00, 'tinggi' => 34.00, 'jr' => 0.00, 'volume' => 59500.0000, 'qty_box' => 18000.00, 'qty_pack' => 6000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
            ['item_number' => 'RMI.WH.01.00000239', 'part_number' => 'MT025 - 23330', 'product_name' => 'DSD-F-W-SN', 'panjang' => 34.00, 'lebar' => 34.00, 'tinggi' => 18.00, 'jr' => 0.00, 'volume' => 20808.0000, 'qty_box' => 6000.00, 'qty_pack' => 6000.00, 'qty_berat' => 0.00, 'created_at' => '2023-07-20T00:00:00', 'updated_at' => '2023-07-20T00:00:00'],
        ];

        $raks = [
            'A.1.1', 'A.1.2', 'A.1.3', 'A.1.4', 'A.1.5', 'A.1.6', 'A.1.7', 'A.1.8', 'A.1.9', 'A.1.10', 'A.1.11', 'A.1.12', 'A.1.13', 'A.1.14', 'A.1.15', 'A.1.16', 'A.1.17', 'A.1.18', 'A.1.19', 'A.1.20', 'A.1.21', 'A.1.22',
            'B.1.1', 'B.1.2', 'B.1.3', 'B.1.4', 'B.1.5', 'B.1.6', 'B.1.7', 'B.1.8', 'B.1.9', 'B.1.10', 'B.1.11', 'B.1.12', 'B.1.13', 'B.1.14', 'B.1.15', 'B.1.16', 'B.1.17', 'B.1.18', 'B.1.19', 'B.1.20', 'B.1.21', 'B.1.22',
            'C.1.1', 'C.1.2', 'C.1.3', 'C.1.4', 'C.1.5', 'C.1.6', 'C.1.7', 'C.1.8', 'C.1.9', 'C.1.10', 'C.1.11', 'C.1.12', 'C.1.13', 'C.1.14', 'C.1.15', 'C.1.16', 'C.1.17', 'C.1.18', 'C.1.19', 'C.1.20', 'C.1.21', 'C.1.22',
        ];

        foreach ($materials as &$material) {
            $material['rak'] = $raks[array_rand($raks)];
        }

        DB::table('materials')->insert($materials);
    }
}
