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
    Schema::create('seen_articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');            // العنوان الرئيسي
        $table->string('subtitle')->nullable(); // العنوان الفرعي
        $table->string('image')->nullable();    // مسار الصورة
        $table->longText('content');        // محتوى المقال (استخدمنا longText للمقالات الطويلة)
        $table->string('slug')->unique();   // رابط المقال SEO
        $table->boolean('is_published')->default(false); // حالة النشر
        $table->timestamp('published_at')->nullable(); // تاريخ النشر الفعلي
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seen_articles');
    }
};
