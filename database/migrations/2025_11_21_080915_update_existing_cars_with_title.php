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
        // Only update if the title column exists and there are records
        if (Schema::hasColumn('cars', 'title') && \DB::table('cars')->count() > 0) {
            \DB::table('cars')->update([
                'title' => \DB::raw("CONCAT(make, ' ', model, ' ', year)"),
                'description' => 'No description available'
            ]);
        }
    }

    public function down()
    {
        // No need to do anything on rollback as we'll drop the columns in the previous migration
    }
};
