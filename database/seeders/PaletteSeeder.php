<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Palette;
use App\Models\User;

class PaletteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id', '1')->first();
        $user->palettes()->create();
        $user = User::where('id', '2')->first();
        $user->palettes()->create();
        $user = User::where('id', '3')->first();
        $user->palettes()->create();
        $user = User::where('id', '4')->first();
        $user->palettes()->create();


    }
}
