<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_evaluations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned(); 
            $table->string('tipoDeNegocio')->nullable();
            $table->string('webSite')->nullable();
            $table->string('tAds');
            $table->string('traditionalAds')->nullable();
            $table->string('sAds');
            $table->string('socialMediaAds')->nullable();
            $table->text('adsAditional')->nullable();
            $table->text('comments')->nullable();
            $table->string('terminosYcondiciones')->nullable();
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
        Schema::dropIfExists('free_evaluations');
    }
}
