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
        Schema::create('purchase_request_forms', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->string('project_title');
            $table->date('project_date');
            $table->string('department', 75);
            $table->string('pr_no', 20)->unique();
            $table->string('date', 20);
            $table->string('section', 75)->nullable();
            $table->integer('sai_no')->nullable();
            $table->integer('bus_no')->nullable();
            $table->string('unit', 20);
            $table->string('item_description', 100);
            $table->bigInteger('quantity');
            $table->double('estimate_unit_cost', 11, 2);
            $table->double('estimate_cost', 11, 2);
            $table->double('total', 11, 2);
            $table->string('delivery_duration', 20);
            $table->string('purpose', 75);
            $table->string('recommended_by_name', 25);
            $table->string('recommended_by_designation', 25);
            $table->string('approved_by_name', 25);
            $table->string('approved_by_designation', 25);
            $table->timestamps();
            $table->foreign('project_id')->references('project_id')->on('projects')->onDelete('cascade');
            $table->foreign('department')->references('department_office')->on('projects')->onDelete('cascade');
            $table->foreign('project_title')->references('project_title')->on('projects')->onDelete('cascade');
            $table->foreign('project_date')->references('project_date')->on('projects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_request_forms');
    }
};
