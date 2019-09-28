<?php

use App\Label;
use Illuminate\Database\Seeder;

class LabelsTableSeeder extends Seeder
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
            ['name' => 'Document'],
            ['name' => 'Video'],
            ['name' => 'Audio'],
            ['name' => 'Images'],
            ['name' => 'Codes'],
            ['name' => 'Animations']
        ];

        foreach ($data as $d) {
            Label::create($d);
        }
    }
}
