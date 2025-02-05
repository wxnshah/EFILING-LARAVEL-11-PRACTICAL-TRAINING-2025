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
        Schema::create('lt_level', function (Blueprint $table) {
            $table->id('id_level');
            $table->string('name_level', 20);
            $table->timestamps();
        });

        DB::table('lt_level')->insert(
            array (
                [
                    'name_level' => "ADMIN"
                ],
                [
                    'name_level' => "STAFF"
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lt_level');
    }
};
