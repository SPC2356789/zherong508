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
        Schema::create('first_pictures', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // 标题
            $table->string('subtitle')->nullable(); // 副标题，允许为空
            $table->string('image_path')->nullable(); // 图片路径，允许为空
            $table->text('content')->nullable(); // 内容
//            $table->string('category'); // 分类
            $table->string('original_image_names'); // 原始照片名
            $table->boolean('status'); // 狀態
            $table->string('orderby')->nullable();
            $table->softDeletes(); // 软删除
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('first_pictures');
    }
};
