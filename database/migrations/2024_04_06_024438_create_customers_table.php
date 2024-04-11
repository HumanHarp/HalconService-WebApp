<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) 
        {
            $table->id();
            $table->string('customer_name');
            $table->string('company_name');
            $table->string('fiscal_data');
            $table->string('delivery_address');



        });
    }

  
    public function down(): void
    {

    }
};
