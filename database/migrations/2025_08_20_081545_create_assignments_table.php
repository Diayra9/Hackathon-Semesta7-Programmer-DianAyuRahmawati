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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('id_assign');
            $table->foreignId('id_complaint');
            $table->foreignId('id_user');
            $table->dateTime('assigned_at')->nullable();
            $table->text('comment')->nullable();
            $table->enum('assign_status', ['assigned', 'reassigned', 'closed'])->default('assigned');
            $table->enum('staff_response', ['not_read', 'accepted', 'rejected'])->default('not_read');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
