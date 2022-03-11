<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPessoaIdToContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('pessoa_id')->nullable();
            $table->foreign('pessoa_id')
            ->references('id')
            ->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos', function (Blueprint $table) {
              $table->dropForeign(['pessoa_id']);
              $table->dropColumn('pessoa_id');
        });
    }
}
