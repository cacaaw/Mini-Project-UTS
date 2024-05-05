<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => '001',
                'nama_barang' => 'Pocari Sweet',
                'harga_barang'=> 8000,
                'deskripsi_barang' => 'Pocari Sweet 600 ml',
                'satuan_barang_id' => 1
            ],
            [
                'kode_barang' => '002',
                'nama_barang' => 'Telur',
                'harga_barang'=> 12000,
                'deskripsi_barang' => 'Telur 1/2 Kg',
                'satuan_barang_id' => 3
            ],
        ]);
    }
}
