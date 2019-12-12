<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchMemberStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_member_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('branch','branches');
            $table->foreignCascade('member','members');
            $table->enum('status',['Active','Inactive'])->default('Active')->index();
            $table->string('comments')->nullable();
            $table->timestamp('date')->useCurrent();
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
        Schema::dropIfExists('branch_member_statuses');
    }
}
