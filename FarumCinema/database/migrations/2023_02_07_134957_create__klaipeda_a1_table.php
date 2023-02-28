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
        Schema::create('_klaipeda_a1', function (Blueprint $table) {
            $table->id();
            $table->string('Vardas');
            $table->string('Pavarde');
            $table->float('kaina');
            $table->boolean('uzimta');
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
        Schema::dropIfExists('_klaipeda_a1');
    }
};
