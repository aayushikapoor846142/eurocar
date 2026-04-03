<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->string('pickup_location');
            $table->string('drop_location');
            $table->dateTime('pickup_datetime');
            $table->enum('trip_type', ['hourly', 'daily', 'multiday']);
            $table->string('status')->default('pending'); // pending, confirmed, cancelled, completed
            $table->decimal('total_amount', 10, 2);
            $table->decimal('distance', 8, 2)->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('payment_intent_id')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
