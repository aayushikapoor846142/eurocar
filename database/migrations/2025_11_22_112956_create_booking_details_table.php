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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->integer('hours')->nullable();
            $table->integer('days')->nullable();
            $table->foreignId('driver_id')->nullable()->constrained('users');
            $table->text('special_instructions')->nullable();
            $table->integer('waiting_time')->default(0); // in minutes
            $table->decimal('toll_fee', 10, 2)->default(0);
            $table->decimal('parking_fee', 10, 2)->default(0);
            $table->decimal('night_charge', 10, 2)->default(0);
            $table->decimal('additional_charges', 10, 2)->default(0);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
