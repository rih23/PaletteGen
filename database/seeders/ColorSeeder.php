<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Colors;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //https://github.com/meodai/color-names Colors are from this repo.
        $csvFile = fopen(base_path("database/data/colornames.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Colors::create([
                    "colorName" => $data['0'],
                    "hexCode" => $data['1']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
