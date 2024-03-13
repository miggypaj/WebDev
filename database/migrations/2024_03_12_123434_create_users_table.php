<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('first_name');
            $table->string('middle_name')->nullable(); // Allow middle name to be null
            $table->string('last_name');
            $table->date('birthdate');
            $table->text('full_address');
            
            // Foreign key for user_type
            $table->unsignedBigInteger('user_type_id');
            $table->foreign('user_type_id')->references('id')->on('user_types');

            // Foreign key for branch (assuming a branches table exists)
            $table->unsignedBigInteger('branch_assigned')->nullable();
            $table->foreign('branch_assigned')->references('id')->on('branches');

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
        Schema::dropIfExists('users');
    }
}
