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
        Schema::create('financial_plan_requests', function (Blueprint $table) {
        $table->id();
        $table->string('first_name'); 
        $table->string('last_name');
        $table->string('email')->unique();
        // الفئات الثلاث من المستند [cite: 39, 48, 61]
        $table->enum('category', ['foundation', 'growth', 'wealth'])->default('foundation');
        $table->text('notes')->nullable(); 
        $table->string('status')->default('pending'); 
        $table->text('behavioral_notes')->nullable();
        $table->softDeletes();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_plan_requests');
    }
};
