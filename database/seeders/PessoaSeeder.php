<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoa::create([
            "nome" => "legal",
            "cpf" => "legal",
            "email" => "legal",
            "data_nasc" => "legal",
            "nacionalidade" => "1"
        ]);
    }
}
