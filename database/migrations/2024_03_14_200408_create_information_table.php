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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('matriculation')->unique();
            $table->string('name');
            $table->string('gender', 1);
            $table->date('admission_date')->format('d-m-Y');
            $table->string('cpf', 11)->unique();
            $table->date('birth_date')->format('d-m-Y');
            $table->string('rg', 11)->unique();
            $table->string('issue_rg', 16);
            $table->string('uf_rg', 16);
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('birthplace');
            $table->string('nationality');
            $table->string('nationality_uf', 2);
            $table->string('blood_type', 4);
            $table->string('identification_number', 1);
            $table->date('issue_date')->format('d-m-Y');
            $table->foreignId('staffing_id')->constrained('staffings')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
