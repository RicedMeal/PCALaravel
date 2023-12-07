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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            $table->string('project_title')->index();
            $table->string('department_office')->index();
            $table->string('project_description')->index();
            $table->string('person_in_charge')->index();
            $table->date('project_date')->index();
            $table->string('purchase_request')->nullable();
            $table->string('price_quotation')->nullable();
            $table->string('abstract_of_canvass')->nullable();
            $table->string('material_and_cost_estimates')->nullable();
            $table->string('budget_utilization_request')->nullable();
            $table->string('project_initiation_proposal')->nullable();
            $table->string('annual_procurement_plan')->nullable();
            $table->string('purchase_request_with_number')->nullable();
            $table->string('market_study')->nullable();
            $table->string('certificate_of_fund_allotment')->nullable();
            $table->string('csw')->nullable();
            $table->string('accomplishment_report')->nullable();
            $table->string('project_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
