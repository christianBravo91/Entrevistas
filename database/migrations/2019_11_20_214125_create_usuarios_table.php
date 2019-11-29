<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('adminis_id')->unsigned()->nullable();
            $table->foreign('adminis_id')->references('id')->on('adminis');
            $table->string('name',100);
            $table->string('apellido', 100);
            $table->string('email', 200);
            $table->string('password', 200);
            $table->integer('examenTeorico')->unsigned()->default(0);
            $table->integer('entrevistaGrupal')->unsigned()->default(0);
            $table->integer('entrevistaIndividual')->unsigned()->default(0);
            $table->string('CondicionAplicante',100)->default('Pendiente');
            $table->softDeletes();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table=usuarios');
    }
}
