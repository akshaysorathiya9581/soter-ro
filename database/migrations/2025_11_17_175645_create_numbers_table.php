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
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->integer('clienti_multumiti')->default(0)->comment('Satisfied clients count');
            $table->integer('numar_declaratii')->default(0)->comment('Fiscal declarations count');
            $table->integer('numar_emailuri')->default(0)->comment('Emails sent count');
            $table->timestamps();
        });
        
        // Insert default row with initial values
        DB::table('numbers')->insert([
            'clienti_multumiti' => 1000,
            'numar_declaratii' => 5000,
            'numar_emailuri' => 10000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numbers');
    }
};
