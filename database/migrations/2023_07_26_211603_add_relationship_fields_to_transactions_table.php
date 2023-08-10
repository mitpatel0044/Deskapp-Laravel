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
        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id', 'project_id')->references('id')->on('projects')->onDelete('cascade');;
            $table->unsignedBigInteger('transaction_type_id')->nullable();
            $table->foreign('transaction_type_id', 'transaction_type_id')->references('id')->on('transaction_types')->onDelete('cascade');;
            $table->unsignedBigInteger('income_source_id')->nullable();
            $table->foreign('income_source_id', 'income_source_id')->references('id')->on('income_sources')->onDelete('cascade');;
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->foreign('currency_id', 'currency_id')->references('id')->on('currencies')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
        });
    }
};