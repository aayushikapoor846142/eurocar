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
    Schema::table('cars', function (Blueprint $table) {
        $table->integer('seats')->after('price');
        $table->integer('luggage')->after('seats');
        $table->string('driver_language', 50)->default('English')->after('luggage');
    });
}

public function down()
{
    Schema::table('cars', function (Blueprint $table) {
        $table->dropColumn(['seats', 'luggage', 'driver_language']);
    });
}
};
