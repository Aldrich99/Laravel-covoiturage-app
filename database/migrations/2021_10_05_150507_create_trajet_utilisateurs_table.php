<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajet_utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('numero_de_telephone');
            $table->string('email');
            $table->integer('trajet_id');          
            $table->string('ville_depart');
            $table->string('lieux_depart');
            $table->string('ville_arriver');
            $table->date('lieu_arriver');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->string('bagages')->nullable();
            $table->string('sac_a_main')->nullable();
            $table->boolean('fumeur');
            $table->string('handicaper');
            $table->integer('prix_voyages');
            $table->integer('numero_plaque');
            $table->integer('nbre_places');
            $table->text('messages')->nullable();
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
        Schema::dropIfExists('trajet_utilisateurs');
    }
}
