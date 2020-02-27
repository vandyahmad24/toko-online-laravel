<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	for ($i=0; $i<10; $i++) {
    		DB::table('products')->insert([
            'nama_brg' 	=> $faker->firstNameMale,
            'deskripsi' => $faker->text,
            'gambar' 	=> 'gambar.jpg',
            'harga' 	=> '10000',
            'stok'	 	=> $faker->buildingNumber,
            'kategori_id'=>1
            
        ]);
    	}
        //
    }
}
