<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $sql = file_get_contents(public_path('indonesia.sql'));
        DB::unprepared($sql);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
