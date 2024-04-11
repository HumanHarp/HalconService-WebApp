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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('invoice_number');
            $table->integer('customer_number');
            $table->unsignedInteger('customer_name');
            $table->unsignedInteger('company_name');
            $table->unsignedInteger('fiscal_data');
            $table->unsignedInteger('delivery_address');
            

           
            $table->foreign('customer_name')->references('customer_name')
                ->on('customers');
            $table->foreign('company_name')->references('company_name')
                ->on('customers');
            $table->foreign('delivery_address')->references('delivery_address')
                ->on('customers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
