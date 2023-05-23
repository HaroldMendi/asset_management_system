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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->index();
            $table->string('status')->index()->default('available');
            $table->unsignedInteger('model_id')->index();
            $table->unsignedInteger('type_id')->index();
            $table->unsignedInteger('purchase_id')->index();
            $table->unsignedInteger('created_by_id')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
