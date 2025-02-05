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
        Schema::create('lt_course', function (Blueprint $table) {
            $table->id('id_course');
            $table->string('name_course', 150);
            $table->timestamps();
        });

        DB::table('lt_course')->insert(
            array (
                [
                    "name_course" => "AKADEMIK KECEMERLANGAN"
                ],
                [
                    "name_course" => "ALAM SEKITAR"
                ],
                [
                    "name_course" => "ARKEOLOGI"
                ],
                [
                    "name_course" => "ASAS SAINS KOMPUTER"
                ],
                [
                    "name_course" => "ASTRONOMI"
                ],
                [
                    "name_course" => "BAHASA ARAB"
                ],
                [
                    "name_course" => "BAHASA INGGERIS"
                ],
                [
                    "name_course" => "BIOKIMIA"
                ],
                [
                    "name_course" => "BIOTEKNOLOGI"
                ],
                [
                    "name_course" => "EKONOMI"
                ],
                [
                    "name_course" => "FIZIK"
                ],
                [
                    "name_course" => "GEOLOGI"
                ],
                [
                    "name_course" => "GEOGRAFI"
                ],
                [
                    "name_course" => "HOSPITALITI"
                ],
                [
                    "name_course" => "KEJURUTERAAN ELEKTRIK"
                ],
                [
                    "name_course" => "KEJURUTERAAN KIMIA"
                ],
                [
                    "name_course" => "KEJURUTERAAN MEKANIKAL"
                ],
                [
                    "name_course" => "KEJURUTERAAN PERISIAN"
                ],
                [
                    "name_course" => "KESELAMATAN AWAM"
                ],
                [
                    "name_course" => "KESIHATAN AWAM"
                ],
                [
                    "name_course" => "KESIHATAN PERSEKITARAN"
                ],
                [
                    "name_course" => "KEUSAHAWANAN"
                ],
                [
                    "name_course" => "KEWANGAN"
                ],
                [
                    "name_course" => "KEWARTAWANAN"
                ],
                [
                    "name_course" => "KOMUNIKASI ANTARABANGSA"
                ],
                [
                    "name_course" => "KOMUNIKASI KORPORAT"
                ],
                [
                    "name_course" => "KOMUNIKASI MASA KINI"
                ],
                [
                    "name_course" => "PENDIDIKAN"
                ],
                [
                    "name_course" => "PENDIDIKAN BAHASA INGGERIS"
                ],
                [
                    "name_course" => "PENDIDIKAN ISLAM"
                ],
                [
                    "name_course" => "PENDIDIKAN JASMANI"
                ],
                [
                    "name_course" => "PENDIDIKAN KANAK-KANAK"
                ],
                [
                    "name_course" => "PENDIDIKAN KHAS"
                ],
                [
                    "name_course" => "PENDIDIKAN MATEMATIK"
                ],
                [
                    "name_course" => "PENDIDIKAN PENDIDIKAN KHAS"
                ],
                [
                    "name_course" => "PENDIDIKAN PENDIDIKAN UNTUK PENDIDIK"
                ],
                [
                    "name_course" => "PENDIDIKAN PERUNDANGAN"
                ],
                [
                    "name_course" => "PENDIDIKAN SENI VISUAL"
                ],
                [
                    "name_course" => "PENDIDIKAN SIVIK"
                ],
                [
                    "name_course" => "PENDIDIKAN TEKNOLOGI"
                ],
                [
                    "name_course" => "PENDIDIKAN TINGGI"
                ],
                [
                    "name_course" => "PENDIDIKAN UNTUK PENDIDIK"
                ],
                [
                    "name_course" => "PENDIDIKAN VOKASIONAL"
                ],
                [
                    "name_course" => "PENDIDIKAN SAINS"
                ],
                [
                    "name_course" => "PEMBANGUNAN KOMUNITI"
                ],
                [
                    "name_course" => "PEMBANGUNAN SOSIAL"
                ],
                [
                    "name_course" => "PEMASARAN"
                ],
                [
                    "name_course" => "PERUNDANGAN"
                ],
                [
                    "name_course" => "PENGURUSAN"
                ],
                [
                    "name_course" => "PENGURUSAN BUKU"
                ],
                [
                    "name_course" => "PENGURUSAN EKONOMI"
                ],
                [
                    "name_course" => "PENGURUSAN HOTEL"
                ],
                [
                    "name_course" => "PENGURUSAN KANAK-KANAK"
                ],
                [
                    "name_course" => "PENGURUSAN KESIHATAN"
                ],
                [
                    "name_course" => "PENGURUSAN KUALITI"
                ],
                [
                    "name_course" => "PENGURUSAN PERNIAGAAN"
                ],
                [
                    "name_course" => "PENGURUSAN PELANCONGAN"
                ],
                [
                    "name_course" => "PENGURUSAN PELAJARAN"
                ],
                [
                    "name_course" => "PENGURUSAN PROJEK"
                ],
                [
                    "name_course" => "PENGURUSAN STRATEGIK"
                ],
                [
                    "name_course" => "PENGURUSAN SUMBER MANUSIA"
                ],
                [
                    "name_course" => "PENGURUSAN TEKNOLOGI"
                ],
                [
                    "name_course" => "PENGURUSAN PENGGUNAAN TANAH"
                ],
                [
                    "name_course" => "SAINS FIZIKAL"
                ],
                [
                    "name_course" => "SAINS KANAK-KANAK"
                ],
                [
                    "name_course" => "SAINS KEJURUTERAAN"
                ],
                [
                    "name_course" => "SAINS KESIHATAN"
                ],
                [
                    "name_course" => "SAINS KOMPUTER"
                ],
                [
                    "name_course" => "SAINS KOMUNIKASI"
                ],
                [
                    "name_course" => "SAINS MAKHLUK HIDUP"
                ],
                [
                    "name_course" => "SAINS PENGURUSAN"
                ],
                [
                    "name_course" => "SAINS PERSEKITARAN"
                ],
                [
                    "name_course" => "SENI BINA"
                ],
                [
                    "name_course" => "SENI HALUS"
                ],
                [
                    "name_course" => "SENI VISUAL"
                ],
                [
                    "name_course" => "SISTEM MAKLUMAT"
                ],
                [
                    "name_course" => "SISTEM PENGURUSAN"
                ],
                [
                    "name_course" => "SISTEM PENGURUSAN MAKLUMAT"
                ],
                [
                    "name_course" => "SISTEM MAKLUMAT GEOGRAFIK"
                ],
                [
                    "name_course" => "TEKNOLOGI BINAAN"
                ],
                [
                    "name_course" => "TEKNOLOGI INDUSTRI"
                ],
                [
                    "name_course" => "TEKNOLOGI MAKLUMAT"
                ],
                [
                    "name_course" => "TEKNOLOGI PENGELUARAN"
                ],
                [
                    "name_course" => "TEKNOLOGI PERUBATAN"
                ],
                [
                    "name_course" => "TURISME"
                ],
                [
                    "name_course" => "URUSAN ISLAM"
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lt_course');
    }
};
