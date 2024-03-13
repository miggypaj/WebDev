<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->string('reference_number', 100)->unique();

            $table->string('sender_name');
            $table->string('sender_contact');
            $table->string('recipient_name');
            $table->string('recipient_contact');

            $table->string('transaction_type');

            $table->decimal('amount_local_currency', 15, 2);

            $table->string('currency_conversion_code', 3)->nullable();

            $table->decimal('amount_converted', 15, 2)->nullable();

            $table->string('transaction_status');

            $table->unsignedBigInteger('branch_sent')->nullable();
            $table->foreign('branch_sent')->references('id')->on('branches')->onDelete('SET NULL');

            $table->unsignedBigInteger('branch_recieved')->nullable();
            $table->foreign('branch_recieved')->references('id')->on('branches')->onDelete('SET NULL');

            $table->unsignedBigInteger('transfer_fee_id')->nullable();
            $table->foreign('transfer_fee_id')->references('id')->on('transfer_fees')->onDelete('SET NULL');

            $table->timestamp('datetime_transaction');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
