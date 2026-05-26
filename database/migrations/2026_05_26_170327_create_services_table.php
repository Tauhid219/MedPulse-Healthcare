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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('icon');
            $table->string('category')->nullable();
            $table->decimal('price_estimate', 8, 2)->default(0.00);
            $table->integer('co_pay_ratio')->default(0); // in percent, e.g. 10 means 10%
            $table->string('duration')->nullable(); // e.g. 'Turnaround: 5-7 Business Days' or 'Duration: 45 Mins'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
