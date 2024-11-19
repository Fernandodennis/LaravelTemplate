<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supplier')->insert([
            [
                'id_supplier' => '23421',
                'nama_supplier' => 'PT taktau',
                'alamat_supplier' => 'Citra lima',
                'telepon_supplier' => '08981512350',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_supplier' => '563432',
                'nama_supplier' => 'PT taktaula',
                'alamat_supplier' => 'Citra enam',
                'telepon_supplier' => '08989213835',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
