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
        Schema::table('custom_invoices', function (Blueprint $table) {
            $table->string('naam_klant');
            $table->string('achternaam_klant');
            $table->text('gemaakte_afspraken');
            $table->double('prijs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('custom_invoices', function (Blueprint $table) {
            Schema::dropIfExists('custom_invoices');
        });
    }
};
