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
        Schema::create('assettag', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('serial_number');
            $table->string('asset_tag_number');
            $table->longText('other_information');
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('purchase_id')->nullable();
            $table->decimal('purchase_price');
            $table->unsignedInteger('asset_id');
            $table->unsignedInteger('created_by_id');
            $table->unsignedInteger('updated_by_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_tags');
    }
};
