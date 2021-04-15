<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,1) as $index) {
            DB::table('pembayarans')->insert([
                'id_petugas' => '1',
                'nisn' => '123123',
                'bulan_dibayar' => $faker->monthName($max = 'now'),
                'tahun_dibayar' => '2021',
                'id_spp' => '1',
                'jumlah_dibayar' => '150000',
                'created_at' => '2021-04-08 09:23:40',
                'updated_at' => '2021-04-08 09:23:40'
            ]);
        }
    }
}
