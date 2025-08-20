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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id('id_complaint');
            $table->foreignId('id_resident');
            $table->text('description');
            $table->text('photo_evidence');
            $table->text('face_detection')->nullable();
            $table->foreignId('id_category')->nullable();
            $table->foreignId('id_priority')->nullable();
            $table->enum('complaint_status', ['new', 'assigned', 'late', 'closed'])->default('new');
            $table->dateTime('responded_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
