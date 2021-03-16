<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->dateTime('invoice_created');
            $table->integer('days_to_pay');
            $table->integer('tax_percentage');
            $table->float('tax_free_price');
            $table->foreignId('user_id')->nullable(true)->constrained('users');
            $table->foreignId('organisation_id')->nullable(true)->constrained('organisations');
            $table->foreignId('package_id')->constrained('packages');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
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
        Schema::dropIfExists('invoices');
    }
}
