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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->string('owner');
            $table->date('due_date');
            $table->enum('status', ['Pending', 'In Progress', 'Completed'])->default('Pending');
            $table->enum('priority', ['Low', 'Medium', 'High']);
            $table->string('notes')->default('No notes');
            $table->integer('budget')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
