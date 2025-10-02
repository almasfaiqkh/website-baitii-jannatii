<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings')->insert([
            // Visi & Misi
            ['key' => 'visi', 'value' => 'Membantu mewujudkan anak yatim, piatu dan dhuafa yang bertaqwa, cerdas, mandiri, dan bermanfaat bagi keluarga, masyarakat, dan bangsa.'],
            ['key' => 'misi', 'value' => "Memberikan rumah asuh sebagai pusat pembinaan yatim, piatu dan dhuafa.\nMemberikan pengajaran untuk mengasah kecerdasan intelektual, moral dan spiritual.\nMelatih ketrampilan kerja dan kewirausahaan agar siap menghadapi tantangan hidup di masa depan.\nMenjadikan Rumah Asuh yang terpercaya untuk menghimpun dan mendayagunakan donasi dari donatur.\nMenciptakan suasana kerja yang ikhlas, mawas dan tuntas bagi para pelaksana."],

            // Kontak
            ['key' => 'alamat', 'value' => 'Jl. Penatusan 1 No.58, Purwokerto Wetan, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53111'],
            ['key' => 'telepon', 'value' => '082328210021'],
            ['key' => 'whatsapp', 'value' => '082225933009'],
            ['key' => 'email', 'value' => 'bj.pwt83@gmail.com'],
        ]);
    }
}
