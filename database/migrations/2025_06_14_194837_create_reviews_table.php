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
        Schema::create('reviews', function (Blueprint $table) {
           $table->id();
            $table->text("comment");
            $table->unsignedBigInteger("userid");
            $table->foreign("userid")->references('id')->on("users")->onDelete("cascade");
            $table->unsignedBigInteger("roomid");
            $table->foreign("roomid")->references('id')->on("rooms")->onDelete("cascade");
            $table->tinyInteger("rating")->default(5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
