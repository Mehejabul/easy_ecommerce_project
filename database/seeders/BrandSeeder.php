<?php

namespace Database\Seeders;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['id'=>1,'name'=>'WaaW Bangladesh','description'=>'','address'=>'','image'=>'','status'=>'Active'],
        ];
        Brand::insert($brands);
    }
}
