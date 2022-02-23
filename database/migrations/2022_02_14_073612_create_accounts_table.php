<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('account_id');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('gender')->onDelete('cascade');
            $table->string('first_name', 25);
            $table->string('middle_name', 25) -> nullable();
            $table->string('last_name', 25);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('display_picture_link', 50);
            $table->integer('delete_flag');
            $table->date('modified_at');
            $table->string('modified_by');
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
        Schema::dropIfExists('accounts');
    }
}
