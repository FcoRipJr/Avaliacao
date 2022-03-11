<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contato;

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
            "telefone" => "+55 11 98745-4562",
            "pessoa_id" => "1"
        ]);

        Contato::create([
            "telefone" => "+22 21 95141-7356",
            "pessoa_id" => "3"
        ]);

        Contato::create([
            "telefone" => "+55 11 95484-9988",
            "pessoa_id" => "1"
        ]);
    }
}
