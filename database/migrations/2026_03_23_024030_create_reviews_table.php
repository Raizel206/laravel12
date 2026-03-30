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
        
        // Thêm ->nullable() vào cả 2 cột này
        $table->foreignId('bike_id')->nullable()->constrained('bikes')->onDelete('cascade');
        $table->foreignId('station_id')->nullable()->constrained('stations')->onDelete('cascade');
        
        $table->integer('rating');
        $table->text('comment')->nullable();
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
