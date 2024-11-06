<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class);
            $table->string('project_name');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['pending', 'finished', 'closed'])->default('pending');
            $table->string('location');
            $table->integer('beneficiaries');
            $table->boolean('is_annual');
            $table->foreignIdFor(\App\Models\Activity::class)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
