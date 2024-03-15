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
            $table->integer('matriculation');
            $table->string('name');
            $table->string('gender', 1);
            $table->date('admission_date')->format('d-m-Y');
            $table->string('cpf', 11)->unique();
            $table->date('birth_date')->format('d-m-Y');
            $table->string('rg', 11)->unique();
            $table->string('issue_rg', 16);
            $table->string('uf_rg', 16);
            $table->string('mother_name');
            $table->string('father_name');
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
