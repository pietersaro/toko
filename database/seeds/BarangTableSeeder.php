<?php

use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	for ($i=0; $i <1000 ; $i++) { 
    		# code...
	        DB::table('pegawai')->insert([
	            'kd_barang' => 'PTR'.$faker->randomDigitNot(5),
	            'nm_barang' => $faker->safeColorName,
	            'stock' => 2,
	            'harga_jual' => 10000,
	            'harga_beli' => 50000,
	        ]);
    	}
    }
}
