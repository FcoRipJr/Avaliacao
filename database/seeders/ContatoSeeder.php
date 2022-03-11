<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato::create([
            "telefone" => "legal",
            "pessoa_id" => "1"
        ]);
    }
}
