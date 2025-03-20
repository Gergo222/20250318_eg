<?php

use App\Models\Service;
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
        Schema::table('cars', function(Blueprint $table){
            $table->foreignIdFor(Service::class, "service_id")
                ->constrained("services");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function(Blueprint $table){
            $table->dropConstrainedForeignIdFor(Service::class, "service_id");
        });
    }
};
