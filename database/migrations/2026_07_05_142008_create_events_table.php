<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('source')->default('google');
            $table->string('external_id')->nullable()->unique();

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('location')->nullable();

            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();

            $table->string('notification_phone');

            $table->unsignedInteger('reminder_minutes')->default(15);

            $table->enum('status', [
                'pending',
                'reminded',
                'completed',
                'failed'
            ])->default('pending');

            $table->timestamp('reminder_sent_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            $table->timestamps();

            $table->index(['user_id', 'status', 'start_time']);
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
