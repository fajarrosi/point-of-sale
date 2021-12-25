<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Size;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'size' => 'S'
        ]);

        Size::create([
            'size' => 'M'
        ]);

        Size::create([
            'size' => 'L'
        ]);

        Size::create([
            'size' => 'XL'
        ]);

    }
}
