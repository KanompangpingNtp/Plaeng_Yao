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
        Schema::table('i_t_a_details', function (Blueprint $table) {
            //
            $table->string('number_ita')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('i_t_a_details', function (Blueprint $table) {
            //
            $table->dropColumn('number_ita');
        });
    }
};
