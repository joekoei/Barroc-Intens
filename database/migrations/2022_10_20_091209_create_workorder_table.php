<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorder', function (Blueprint $table) {
            $table->id();
            $table->string("workorder_id"); // custom id. Just better for the client
            $table->json("products_worked_on"); // lijst met alle producten waar maintenance op uitgevoerd is. kan 1 zijn of meer.
            $table->json('parts_used'); // lijst met alle onderdelen gebruikt. Kan 1 zijn
            $table->string('description'); // beschrijving werkzaamheden
            $table->integer('user_id'); // medewerker
            $table->foreignId('company_id')->references('id')->on('companies'); // bedrijf
            $table->string('note'); // opmerkingen
            $table->dateTime('when'); // datum & tijd
            $table->string('location'); // locatie
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
        Schema::dropIfExists('workorder');
    }
};
