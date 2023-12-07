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
        Schema::create('price_quotations', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->string('project_title');
            $table->date('project_date');
            $table->string('supplier_id');
            $table->string('supplier_name');
            $table->id('rfq_id');
            $table->string('rfq_no');
            $table->string('file_name');
            $table->string('file_content'); 
            $table->timestamps();
            $table->foreign('project_id')->references('project_id')->on('projects')->onDelete('cascade');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('cascade');
            $table->foreign('supplier_name')->references('supplier_name')->on('suppliers')->onDelete('cascade');
            $table->foreign('project_title')->references('project_title')->on('projects')->onDelete('cascade');
            $table->foreign('project_date')->references('project_date')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_quotations');
    }
};
