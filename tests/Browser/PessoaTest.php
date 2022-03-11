<?php

namespace Tests\Browser\UserTest;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicUser()
    {
         // Gerador de dados falsos
    $faker = Factory::create('pt_BR');

    $this->browse(function (Browser $browser) use ($faker) {
        $name = $faker->name;
        $email = $faker->email;

        $browser->visit('/registers/create') // Acessa a rota que de cadastro
            ->type('name', $name) // Preenche nome
            ->type('email', $email) // Preenche email
            ->press('Salvar') // Clica em "Salvar"
            ->assertPathIs('/registers') // Testa se fui redirecionado para a rota da lista
            ->assertSee($name) // Testa se o nome preenchido está na lista
            ->assertSee($email); // Testa se o email preenchido está na lista
    });
    }
}
