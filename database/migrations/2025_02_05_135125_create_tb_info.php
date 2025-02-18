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
            $table->string('nama_fail', 100)->nullable();
            $table->string('id_user');
            $table->smallInteger('id_department');
            $table->string('tarikh_fail', 20);
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
