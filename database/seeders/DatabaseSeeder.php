<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bidang;
use App\Models\Aset;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Bidang::factory(5)->create();
        Aset::factory(20)->create();

        DB::table('aktivitas')->insert([
            [
                'nama_aktivitas' => 'Menambahkan',
            ],
            [
                'nama_aktivitas' => 'Memperbarui',
            ],
            [
                'nama_aktivitas' => 'Menghapus',
            ],
            [
                'nama_aktivitas' => 'Mengkonfirmasi',
            ],
            [
                'nama_aktivitas' => 'memulihkan',
            ],
        ]);
    }
}
