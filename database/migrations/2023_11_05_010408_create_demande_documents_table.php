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
        Schema::create('demande_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demande_id')->index();
            $table->string('name');
            $table->string('doc_url')->nullable();
            $table->integer('obligatoire')->default(0)->comment("0=> Non Obligatoire, 1=>Obligatoire");
            $table->integer('etat')->default(0)->comment("0=>non approuvé, 1=>approuvé");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_documents');
    }
};
