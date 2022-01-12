<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogCategory::create([
            'name' => 'Latest Blog',
            'ar_name' => 'أحدث المدونات',
        ]);
        BlogCategory::create([
            'name' => 'Parking Space Host',
            'ar_name' => 'مضيف مساحة وقوف السيارات',
        ]);
    }
}
