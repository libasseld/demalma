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
        Schema::table('demandes', function (Blueprint $table) {
            $table->integer('paiement')->default(0)->after('etat');
            $table->dateTime('date_paiement')->nullable()->after('paiement');
            $table->string('paiment_infos')->nullable()->after('date_paiement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->dropColumn('paiement');
            $table->dropColumn('date_paiement');
            $table->dropColumn('paiment_infos');
        });
    }
};
