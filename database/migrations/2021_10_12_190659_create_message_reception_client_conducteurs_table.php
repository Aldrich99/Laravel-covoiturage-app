<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageReceptionClientConducteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_reception_client_conducteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_receveur_numero');
            $table->string('numero_envoyeur');
            $table->string('sujet')->nullable();
            $table->text('message');
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
        Schema::dropIfExists('message_reception_client_conducteurs');
    }
}
