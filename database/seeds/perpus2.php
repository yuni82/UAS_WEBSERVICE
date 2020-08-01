<?php

use Illuminate\Database\Seeder;

class perpus2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batas = 5;
        for ($i=0; $i < $batas ; $i++) { 
            DB::table('perpuses')->insert([
                'judul_buku' => Str::random(10),
                'tahun_terbit' => Str::random(20),
                'pengarang' => Str::random(15),
                'tahun_buku' => Str::random(8),
            ]);
    }
}
}