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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->string('project_description');
            $table->date('project_date');
            $table->string('supplier_id')->unique();
            $table->string('supplier_name')->index();
            $table->string('address');
            $table->string('tel_no');
            $table->string('fax_no');
            $table->string('website');
            $table->string('contact_person');
            $table->string('email');
            $table->timestamps();
            $table->foreign('project_id')->references('project_id')->on('projects')->onDelete('cascade');
            $table->foreign('project_description')->references('project_description')->on('projects')->onDelete('cascade');
            $table->foreign('project_date')->references('project_date')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
