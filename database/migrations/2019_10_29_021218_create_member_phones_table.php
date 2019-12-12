<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('member','members');
            $table->unsignedSmallInteger('country_code')->nullable();
            $table->string('number',16);
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
        Schema::dropIfExists('member_phones');
    }
}
