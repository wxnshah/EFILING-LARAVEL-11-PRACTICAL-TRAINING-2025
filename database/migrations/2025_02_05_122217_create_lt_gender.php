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
        Schema::create('lt_gender', function (Blueprint $table) {
            $table->id('id_gender');
            $table->string('name_gender', 10);
            $table->timestamps();
        });

        DB::table('lt_gender')->insert(
            array (
                [
                    'name_gender' => 'LELAKI'
                ],
                [
                    'name_gender' => 'PEREMPUAN'
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lt_gender');
    }
};
