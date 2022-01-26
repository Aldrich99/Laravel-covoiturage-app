<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageEnvoiClientConducteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_envoi_client_conducteurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_envoyeur_numero');
            $table->string('numero_destinataire');
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
        Schema::dropIfExists('message_envoi_client_conducteurs');
    }
}
