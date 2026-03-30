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
    Schema::create('rentals', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('users');
        $table->foreignId('bike_id')->constrained('bikes');
        $table->foreignId('start_station_id')->constrained('stations','id');
        $table->foreignId('end_station_id')->nullable()->constrained('stations','id'); // Thêm nullable vì lúc mới thuê chưa có trạm trả
        
        // Sửa start_time thành star_time (bỏ chữ t)
        $table->timestamp('star_time')->nullable(); 
        
        $table->timestamp('end_time')->nullable();
        $table->decimal('total_price',10,2)->nullable();
        $table->enum('status',['ongoing','completed'])->default('ongoing');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
