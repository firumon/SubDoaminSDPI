<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabriVerdictPresidentLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babri_verdict_president_letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','128')->index();
            $table->string('phone','32')->nullable();
            $table->text('address')->nullable();
            $table->audit();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('babri_verdict_president_letters');
    }
}
