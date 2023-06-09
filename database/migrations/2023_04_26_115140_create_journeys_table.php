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
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_category')->nullable();
            $table->foreign('id_category')
                ->references('id')
                ->on('category_journeys')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('Job_Title');
            $table->string('Job_Location');
            $table->text('Job_Description');
            $table->unsignedSmallInteger('Month');
            $table->year('Year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journeys');
    }
};
