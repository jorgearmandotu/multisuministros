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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('number')->nullable();
            $table->text('type_service');
            $table->foreignId('client')->references('id')->on('clients');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->time('hour_in');
            $table->time('hour_out');
            $table->text('service_description')->nullable();
            $table->text('used_components')->nullable();
            $table->text('observations')->nullable();
            $table->text('technical');
            $table->text('client_signature')->nullable();
            $table->text('work_done')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};
