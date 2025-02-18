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
        Schema::create('lt_department', function (Blueprint $table) {
            $table->id('id_department');
            $table->string('name_department', 100);
            $table->string('code_department', 20);
        });

        DB::table('lt_department')->insert(
            array(
                [
                    "name_department" => "PENGURUSAN TERTINGGI",
                    "code_department" => "PT"
                ],
                [
                    "name_department" => "PEJABAT YANG DIPERTUA & HAL EHWAL AHLI MAJLIS",
                    "code_department" => "PYDP"
                ],
                [
                    "name_department" => "JABATAN BANGUNAN",
                    "code_department" => "JBANG"
                ],
                [
                    "name_department" => "JABATAN KEJURUTERAAN",
                    "code_department" => "JKEJ"
                ],
                [
                    "name_department" => "JABATAN KESIHATAN PERSEKITARAN",
                    "code_department" => "JKES"
                ],
                [
                    "name_department" => "JABATAN KEWANGAN",
                    "code_department" => "JKEW"
                ],
                [
                    "name_department" => "JABATAN KHIDMAT PENGURUSAN",
                    "code_department" => "JKP"
                ],
                [
                    "name_department" => "JABATAN LANDSKAP & REKREASI",
                    "code_department" => "JLAND"
                ],
                [
                    "name_department" => "JABATAN PEMBANGUNAN MASYARAKAT",
                    "code_department" => "JPM"
                ],
                [
                    "name_department" => "JABATAN PENGUATKUASAAN",
                    "code_department" => "ENFORCE"
                ],
                [
                    "name_department" => "JABATAN PENILAIAN & PENGURUSAN HARTA",
                    "code_department" => "JPPH"
                ],
                [
                    "name_department" => "JABATAN PERANCANGAN BANDAR",
                    "code_department" => "JPB"
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lt_department');
    }
};
