<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Liên kết với users
            $table->decimal('total', 10, 2); // Tổng tiền
            $table->string('status')->default('pending'); // Trạng thái
            $table->text('note')->nullable(); // Ghi chú
            $table->dateTime('booking_date')->default(DB::raw('CURRENT_TIMESTAMP')); // Ngày đặt phòng (mặc định là lúc tạo)
            $table->dateTime('payment_date')->nullable(); // Ngày thanh toán (nếu có)
            $table->timestamps(); // created_at & updated_at

            // Khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
