<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegislativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legislatives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('district','districts');
            $table->string('name',190)->index();
            $table->string('name_regional',190)->nullable();
            $table->enum('status',['Active','Inactive'])->default('Active')->index();
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
        Schema::dropIfExists('legislatives');
    }
}
