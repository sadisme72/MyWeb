<?php

use Illuminate\Database\Seeder;

class konten extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('isi')->insert([
            'Konten' => Str::random(1000),
        ]);
    }
}
