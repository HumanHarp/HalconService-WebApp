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
        Schema::create('order_status', function (Blueprint $table)
        {
            $table->id();
            $table->enum('status', ['ordered,inprocess, inroute,delivered']);
        });
    }

    
    public function down(): void
    {
        //
    }
};
