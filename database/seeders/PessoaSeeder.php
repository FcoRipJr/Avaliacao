<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pessoa;
use Carbon\Carbon;

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
            "nome" => "Joao",
            "cpf" => "12345667123",
            "email" => "joao@joao.com",
            "data_nasc" => Carbon::parse('1989-10-10'),
            "nacionalidade" => "Brasil"
        ]);

        Pessoa::create([
            "nome" => "Maria",
            "cpf" => "78946919193",
            "email" => "maria@maria.com",
            "data_nasc" => Carbon::parse('2000-08-10'),
            "nacionalidade" => "EUA"
        ]);

        Pessoa::create([
            "nome" => "Jonh",
            "cpf" => "88881818164",
            "email" => "jonh@jonh.com",
            "data_nasc" => Carbon::parse('1975-03-05'),
            "nacionalidade" => "Australia"
        ]);
    }
}
