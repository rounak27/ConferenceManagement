<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hospitals = [
            ['name' => 'BHARATUR HOSPITAL', 'address' => 'Bharatpur'],
            ['name' => 'BIRAT MEDICAL COLLEGE & TEACHING HOSPITAL (BMCTH)', 'address' => 'Biratnagar'],
            ['name' => 'BP KOIRALA INSTITUTE OF HEALTH SCIENCES (BPKIHS)', 'address' => 'Dharan'],
            ['name' => 'CHITWAN MEDCAL COLLEGE (CMC)', 'address' => 'Chitwan'],
            ['name' => 'DHULIKHEL HOSPITAL (DH)', 'address' => 'Dhulikhel'],
            ['name' => 'DEVDAHA MEDICAL COLLEGE & TEACHING HOSPITAL (DMCTH)', 'address' => 'Devdaha'],
            ['name' => 'GANDAKI MEDICAL COLLEGE & TEACHING HOSPITAL (GMCTH)', 'address' => 'Pokhara'],
            ['name' => 'GRANDE INTERNATIONAL HOSPITAL', 'address' => 'Kathmandu'],
            ['name' => 'KANTI CHILDREN\'S HOSPITAL (KCH)', 'address' => 'Kathmandu'],
            ['name' => 'KATHMANDU MEDICAL COLLEGE & TEACHING HOSPITAL (KMCTH)', 'address' => 'Kathmandu'],
            ['name' => 'KIST MEDICAL COLLEGE & TEACHING HOSPITAL (KISTMCTH)', 'address' => 'Lalitpur'],
            ['name' => 'NEPAL MEDICAL COLLEGE & TEACHING HOSPITAL (NMCTH)', 'address' => 'Kathmandu'],
            ['name' => 'NEPALESE ARMY INSTITUTE OF HEALTH SCIENCES (NAIHS)', 'address' => 'Kathmandu'],
            ['name' => 'NORVIC HOSPITAL', 'address' => 'Kathmandu'],
            ['name' => 'INTERNATIONAL FRIENDSHIP CHILDREN\'S HOSPITAL (IFCH)', 'address' => 'Lalitpur'],
            ['name' => 'ISHAN CHILDREN\'S & WOMEN\'S HOSPITAL (ICWH)', 'address' => 'Kathmandu'],
            ['name' => 'JANAKI MEDICAL COLLEGE & TEACHING HOSPITAL (JMCTH)', 'address' => 'Janakpur'],
            ['name' => 'KARNALI ACADEMY OF HEALTH SCIENCES (KAHS)', 'address' => 'Jumla'],
            ['name' => 'LUMBINI MEDICAL COLLEGE & TEACHING HOSPITAL (LMCTH)', 'address' => 'Lumbini'],
            ['name' => 'MADHESH INSTITUTE OF HEALTH SCIENCES (MIHS)', 'address' => 'Madhesh'],
            ['name' => 'MANIPAL COLLEGE OF MEDICAL SCIENCES (MCOMS)', 'address' => 'Pokhara'],
            ['name' => 'NATIONAL MEDICAL COLLEGE & TEACHING HOSPITAL (NMCTH)', 'address' => 'Birgunj'],
            ['name' => 'NEPAL MEDICITY HOSPITAL', 'address' => 'Lalitpur'],
            ['name' => 'NEPALGUNG MEDICAL COLLEGE & TEACHING HOSPITAL (NMCTH)', 'address' => 'Nepalgunj'],
            ['name' => 'NOBEL MEDICAL COLLEGE & TEACHING HOSPITAL (NMCTH)', 'address' => 'Biratnagar'],
            ['name' => 'PATAN ACADEMY OF HEALTH SCIENCES (PAHS)', 'address' => 'Patan'],
            ['name' => 'POKHARA ACADEMY OF HEALTH SCIENCES (PAHS)', 'address' => 'Pokhara'],
            ['name' => 'RAPTI ACADEMY OF HEALTH SCIENCES DANG (RAHS)', 'address' => 'Dang'],
            ['name' => 'SIDDHI MEMORIAL HOSPITAL', 'address' => 'Bhaktapur'],
            ['name' => 'TRIBHUVAN UNIVERSITY TEACHING HOSPITAL (TUTH-IOM)', 'address' => 'Kathmandu'],
            ['name' => 'TULSIPUR HOSPITAL DANG', 'address' => 'Tulsipur'],
            ['name' => 'UNIVERSAL COLLEGE OF MEDICAL SCIENCES (UCMS)', 'address' => 'Bhairahawa'],
            ['name' => 'OTHERS (PLEASE SPECIFY)', 'address' => 'N/A'],
        ];

        DB::table('tbl_hospitals')->insert($hospitals);
    }

}
