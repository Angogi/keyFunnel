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
            $table->char('name', 100);
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('webSite')->nullable();
            $table->string('ads');
            $table->string('socialMediaAds')->nullable();
            $table->text('adsAditional')->nullable();
            $table->text('comments')->nullable();
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
