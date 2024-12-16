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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->enum('type', [
                'standard', 'vip', 'early_bird', 
                'group', 'student', 'senior'
            ]);
            
            $table->decimal('price', 10, 2);
            $table->enum('status', [
                'reserved', 'paid', 'canceled', 
                'refunded', 'checked_in'
            ])->default('reserved');
            
            $table->string('qr_code')->nullable();
            $table->dateTime('purchase_date');
            $table->dateTime('checked_in_at')->nullable();
            
            $table->json('additional_options')->nullable();
            
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
