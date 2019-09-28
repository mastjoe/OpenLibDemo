<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'name' => 'uncategorized',
                'description' => 'resources without category'
            ]
        ];

        foreach ($data as $d) {
            Category::create($d);
        }
    }
}
