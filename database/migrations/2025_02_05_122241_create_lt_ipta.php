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
        Schema::create('lt_ipta', function (Blueprint $table) {
            $table->id('id_ipta');
            $table->string('name_ipta', 200);
            $table->timestamps();
        });

        DB::table('lt_ipta')->insert(
            array(
                [
                    "name_ipta" => "INSTITUT LATIHAN INDUSTRI MALAYSIA (ILIM)"
                ],
                [
                    "name_ipta" => "INSTITUT LATIHAN PERINDUSTRIAN JEMPOL (ILPJ)"
                ],
                [
                    "name_ipta" => "INSTITUT LATIHAN PERINDUSTRIAN KUALA LUMPUR (ILPKL)"
                ],
                [
                    "name_ipta" => "INSTITUT LATIHAN PERINDUSTRIAN SULTAN AZLAN SHAH (ILPSAS)"
                ],
                [
                    "name_ipta" => "INSTITUT KEMAHIRAN BELIA DAN SUMBER MANUSIA (IKBSM)"
                ],
                [
                    "name_ipta" => "INSTITUT KEMAHIRAN MARA (IKM)"
                ],
                [
                    "name_ipta" => "INSTITUT KEMAHIRAN POLIS DIRAJA MALAYSIA (IKPDRM)"
                ],
                [
                    "name_ipta" => "INSTITUT PENDIDIKAN GURU KAMPUS KEDAH (IPGK KEDAH)"
                ],
                [
                    "name_ipta" => "INSTITUT PENDIDIKAN GURU KAMPUS MALAYSIA (IPGK MALAYSIA)"
                ],
                [
                    "name_ipta" => "INSTITUT PENDIDIKAN GURU KAMPUS PERAK (IPGK PERAK)"
                ],
                [
                    "name_ipta" => "INSTITUT PENDIDIKAN GURU KAMPUS SARAWAK (IPGK SARAWAK)"
                ],
                [
                    "name_ipta" => "INSTITUT PENGURUSAN PERNIAGAAN (IPP)"
                ],
                [
                    "name_ipta" => "INSTITUT SULTAN IDRIS SHAH (ISIS)"
                ],
                [
                    "name_ipta" => "INSTITUT TADBIR DAN PENGURUSAN (ITP)"
                ],
                [
                    "name_ipta" => "INSTITUT TEKNOLOGI PETRONAS (ITP)"
                ],
                [
                    "name_ipta" => "INSTITUT TEKNOLOGI SULTAN ISKANDAR (ITSI)"
                ],
                [
                    "name_ipta" => "INSTITUT TEKNOLOGI UNIVERSITI MALAYSIA KELANTAN (UMK)"
                ],
                [
                    "name_ipta" => "INSTITUT TEKNOLOGI UNIVERSITI MALAYSIA PAHANG (UMP)"
                ],
                [
                    "name_ipta" => "INSTITUT TEKNOLOGI UNIVERSITI MALAYSIA TERENGGANU (UMT)"
                ],
                [
                    "name_ipta" => "INSTITUT TEKNOLOGI UNIVERSITI SAINS MALAYSIA (USM)"
                ],
                [
                    "name_ipta" => "INSTITUT TEKNOLOGI UNIVERSITI UTARA MALAYSIA (UUM)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI ALOR SETAR (KKAS)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI BANDAR PENAWAR (KKBP)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI BATU PAHAT (KKBP)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI BENTONG (KKB)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI BUKIT MERTAJAM (KKBM)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI CHUKAI (KKC)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI DUNGUN (KKD)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI GOMBAK (KKG)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI JEMPOL (KKJ)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI JOHOR BAHRU (KKJB)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI KELANTAN (KKK)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI KUALA LUMPUR (KKKL)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI KUALA TERENGGANU (KKKT)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI KUANTAN (KKQ)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI LANGKAWI (KKL)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI MELAKA (KKM)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI PENDANG (KKP)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI SABAH (KKS)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI SIBU (KKS)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI SIMPANG RENGGAM (KKSR)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI TANJUNG MALIM (KKT)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI TUMPAT (KKT)"
                ],
                [
                    "name_ipta" => "KOLEJ KOMUNITI WANGSA MAJU (KKWM)"
                ],
                [
                    "name_ipta" => "KOLEJ UNIVERSITI TUNKU ABDUL RAHMAN (TAR UC)"
                ],
                [
                    "name_ipta" => "POLITEKNIK BATU PAHAT (PBP)"
                ],
                [
                    "name_ipta" => "POLITEKNIK BANGI (PBG)"
                ],
                [
                    "name_ipta" => "POLITEKNIK BELURAN (PBL)"
                ],
                [
                    "name_ipta" => "POLITEKNIK DUNGUN (PDG)"
                ],
                [
                    "name_ipta" => "POLITEKNIK JOHOR BAHRU (PJB)"
                ],
                [
                    "name_ipta" => "POLITEKNIK KOTA BHARU (PKB)"
                ],
                [
                    "name_ipta" => "POLITEKNIK KUALA LUMPUR (PKL)"
                ],
                [
                    "name_ipta" => "POLITEKNIK KUANTAN (PKQ)"
                ],
                [
                    "name_ipta" => "POLITEKNIK MELAKA (PM)"
                ],
                [
                    "name_ipta" => "POLITEKNIK PENDIDIKAN PUNCAK ALAM (PPPA)"
                ],
                [
                    "name_ipta" => "POLITEKNIK PORT DICKSON (PPD)"
                ],
                [
                    "name_ipta" => "POLITEKNIK SABAH (PSB)"
                ],
                [
                    "name_ipta" => "POLITEKNIK SEBERANG PERAI (PSP)"
                ],
                [
                    "name_ipta" => "POLITEKNIK SEGAMAT (PSG)"
                ],
                [
                    "name_ipta" => "POLITEKNIK SULTAN AZLAN SHAH (PSAS)"
                ],
                [
                    "name_ipta" => "POLITEKNIK SULTAN HAJI AHMAD SHAH (PSHAS)"
                ],
                [
                    "name_ipta" => "POLITEKNIK SULTAN IDRIS SHAH (PSIS)"
                ],
                [
                    "name_ipta" => "POLITEKNIK TUANKU SYED SIRAJUDDIN (PTSS)"
                ],
                [
                    "name_ipta" => "POLITEKNIK UNGKU OMAR (PUO)"
                ],
                [
                    "name_ipta" => "POLITEKNIK WANGSA MAJU (PWM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI ALMA (UA)"
                ],
                [
                    "name_ipta" => "UNIVERSITI DARUL IMAN MALAYSIA (UDM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI ISLAM ANTARABANGSA MALAYSIA (UIAM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI KEBANGSAAN MALAYSIA (UKM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI KUALA LUMPUR (UNIKL)"
                ],
                [
                    "name_ipta" => "UNIVERSITI MALAYA (UM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI MALAYSIA KELANTAN (UMK)"
                ],
                [
                    "name_ipta" => "UNIVERSITI MALAYSIA PAHANG (UMP)"
                ],
                [
                    "name_ipta" => "UNIVERSITI MALAYSIA PERLIS (UniMap)"
                ],
                [
                    "name_ipta" => "UNIVERSITI MALAYSIA SABAH (UMS)"
                ],
                [
                    "name_ipta" => "UNIVERSITI MALAYSIA SARAWAK (UNIMAS)"
                ],
                [
                    "name_ipta" => "UNIVERSITI MALAYSIA TERENGGANU (UMT)"
                ],
                [
                    "name_ipta" => "UNIVERSITI PENDIDIKAN SULTAN IDRIS (UPSI)"
                ],
                [
                    "name_ipta" => "UNIVERSITI PERTAHANAN NASIONAL MALAYSIA (UPNM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI PUTRA MALAYSIA (UPM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI SAINS ISLAM MALAYSIA (USIM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI SAINS MALAYSIA (USM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI SULTAN ZAINAL ABIDIN (USZA)"
                ],
                [
                    "name_ipta" => "UNIVERSITI TEKNIKAL MALAYSIA MELAKA (UTeM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI TEKNOLOGI MARA (UiTM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI TEKNOLOGI MALAYSIA (UTM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI TUN HUSSEIN ONN MALAYSIA (UTHM)"
                ],
                [
                    "name_ipta" => "UNIVERSITI UTARA MALAYSIA (UUM)"
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lt_ipta');
    }
};
