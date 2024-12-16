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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('title');
            $table->text('description');
            $table->enum('type', [
                'conference', 'workshop', 'seminar', 
                'concert', 'exhibition', 'networking', 
                'online', 'hybrid'
            ]);
            $table->enum('status', [
                'draft', 'published', 'canceled', 
                'completed', 'postponed'
            ])->default('draft');
            
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('venue_id')->nullable()->constrained('venues');
            
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('max_capacity')->nullable();
            $table->integer('current_capacity')->default(0);
            
            $table->boolean('is_online')->default(false);
            $table->string('online_link')->nullable();
            
            $table->decimal('base_price', 10, 2)->nullable();
            $table->json('pricing_tiers')->nullable();
            
            $table->text('terms_and_conditions')->nullable();
            $table->json('tags')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
