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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string("pimage")->nullable();
            $table->bigInteger("base_price")->default(0); // giá phòng
            $table->text("description")->nullable();
            $table->foreignId('hotel_id')->constrained()->onDelete('cascade'); // liên kết với khách sạn
            // $table->text("review")->nullable();
            $table->text("amenities");
            $table->boolean("isInUse")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
