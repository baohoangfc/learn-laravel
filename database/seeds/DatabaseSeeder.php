<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(DataTableSeeder::class);
        //$this->call(ImagesTableSeeder::class);
        $this->call(ThanhVienTableSeeder::class);
    }

    
}

class DataTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            array('name'=>'Quần Thể  Thao', 'price'=>'12', 'cate_id'=>'1'),
            array('name'=>'Áo Thể  Thao', 'price'=>'11', 'cate_id'=>'2'),
            array('name'=>'Găng Tay Thể  Thao', 'price'=>'13', 'cate_id'=>'3'),
            array('name'=>'Vớ Thể  Thao', 'price'=>'14', 'cate_id'=>'4'),
            array('name'=>'Bão Thể  Thao', 'price'=>'16', 'cate_id'=>'5')
        ]);
    }
}

class ImagesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            array('name'=>'Ảnh 1', 'product_id'=>'1'),
            array('name'=>'Ảnh 2', 'product_id'=>'2'),
            array('name'=>'Ảnh 3', 'product_id'=>'3'),
        ]);
    }

    
}

class ThanhVienTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thanhviens')->insert([
            array('user'=>'bao', 'pass'=>Hash::make(123456), 'level'=>1),
            array('user'=>'bao1', 'pass'=>Hash::make(123456), 'level'=>2),
            array('user'=>'bao2', 'pass'=>Hash::make(123456), 'level'=>1),
            array('user'=>'bao3', 'pass'=>Hash::make(123456), 'level'=>2),
        ]);
    }

    
}
