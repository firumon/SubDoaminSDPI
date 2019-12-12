<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundCollectionMemberOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_collection_member_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('member','members');
            $table->integer('offer')->default(0);
            $table->integer('collected')->default(0);
            $table->date('collect_date')->nullable();
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
        Schema::dropIfExists('fund_collection_member_offers');
    }
}
