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
        Schema::table('leasecontract', function (Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->string('status')->default("Niet betaald");
            $table->string('product');
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
        Schema::table('leasecontract', function (Blueprint $table) {
            Schema::dropIfExists('leasecontract');
        });
    }
};
