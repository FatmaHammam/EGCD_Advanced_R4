<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_name');
            $table->text('order_description');
            $table->double('amount');
            $table->date('order_date');
            // $table->unsignedBigInteger('customer_id');
            // $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreignId('customer_id')->constrained(table: 'customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

//1. create posts migration to store post title, post content, post date
//2. create relationship between posts& users