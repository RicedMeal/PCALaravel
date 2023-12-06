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
        Schema::create('supplementary_documents', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id'); 
            $table->id('file_id'); 
            $table->string('file_name')->nullable(); // valdiation for input name 
            $table->string('file_content')->nullable(); 
            $table->timestamps();
            $table->foreign('project_id')->references('project_id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplementary_documents');
    }
};
