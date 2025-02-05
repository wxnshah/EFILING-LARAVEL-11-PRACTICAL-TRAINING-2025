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
        Schema::create('tb_info', function (Blueprint $table) {
            $table->id('id_info');
            $table->mediumText('image')->nullable();
            $table->smallInteger('id_user');
            $table->smallInteger('id_gender');
            $table->string('no_matrik', 50);
            $table->string('tarikh_lapor', 20);
            $table->smallInteger('id_course');
            $table->smallInteger('id_ipta');
            $table->string('created_by')->nullable();
            $table->timestamps();
            $table->string('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_info');
    }
};
