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
        Schema::create('bias_metrics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audit_id')->constrained('audits', 'audit_id')->onDelete('cascade');
            $table->string('metric_name');
            $table->float('metric_value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bias_metrics');
    }
};
