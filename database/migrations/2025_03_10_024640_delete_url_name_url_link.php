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
            $table->dropColumn(['url_name', 'url_link']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('i_t_a_details', function (Blueprint $table) {
            //
            $table->text('url_name')->nullable();
            $table->string('url_link');
        });
    }
};
