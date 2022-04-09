<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gewog;

class GewogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gewogs =  [
            // Bumthang
            ['geo_name' => 'Chhoekhor', 'dzo_id' => '1',],
            ['geo_name' => 'Chhume', 'dzo_id' => '1',],
            ['geo_name' => 'Tang', 'dzo_id' => '1',],
            ['geo_name' => 'Ura',' dzo_id' => '1', ],
            ['geo_name' => 'Bjachho', 'dzo_id' => '2',],

            // Chhukha
            ['geo_name' => 'Bongo', 'dzo_id' => '2',],
            ['geo_name' => 'Chapcha', 'dzo_id' => '2',],
            ['geo_name' => 'Darla', 'dzo_id' => '2',],
            ['geo_name' => 'Darla', 'dzo_id' => '2',],
            ['geo_name' => 'Dungna', 'dzo_id' => '2',],
            ['geo_name' => 'Geling', 'dzo_id' => '2',],
            ['geo_name' => 'Getana', 'dzo_id' => '2',],
            ['geo_name' => 'Lokchina', 'dzo_id' => '2',],
            ['geo_name' => 'Metakha', 'dzo_id' => '2',],
            ['geo_name' => 'Phuentsholing', 'dzo_id' => '2',],
            ['geo_name' => 'Sampheling', 'dzo_id' => '2',],

            // Dagana
            ['geo_name' => 'Dorona','dzo_id' => '3',],
            ['geo_name' => 'Drujegang','dzo_id' => '3',],
            ['geo_name' => 'Gesarling','dzo_id' => '3',],
            ['geo_name' => 'Goshi','dzo_id' => '3',],
            ['geo_name' => 'Kana','dzo_id' => '3',],
            ['geo_name' => 'Karmaling','dzo_id' => '3',],
            ['geo_name' => 'Khebisa','dzo_id' => '3',],
            ['geo_name' => 'Lajab','dzo_id' => '3',],
            ['geo_name' => 'Lhamoi Zhingkha','dzo_id' => '3',],
            ['geo_name' => 'Nichula','dzo_id' => '3',],
            ['geo_name' => 'Trashiding','dzo_id' => '3',],
            ['geo_name' => 'Tsangka','dzo_id' => '3',],
            ['geo_name' => 'Tsendagang','dzo_id' => '3',],
            ['geo_name' => 'Tseza','dzo_id' => '3',],

            // Gasa
            ['geo_name' => 'Khamaed','dzo_id' => '4',],
            ['geo_name' => 'Khatoe','dzo_id' => '4',],
            ['geo_name' => 'Laya','dzo_id' => '4',],
            ['geo_name' => 'Lunana','dzo_id' => '4',],

            // Haa
            ['geo_name' => 'Bji','dzo_id' => '5',],
            ['geo_name' => 'Gakiling','dzo_id' => '5',],
            ['geo_name' => 'Katsho','dzo_id' => '5',],
            ['geo_name' => 'Samar','dzo_id' => '5',],
            ['geo_name' => 'Sangbay','dzo_id' => '5',],
            ['geo_name' => 'Uesu','dzo_id' => '5',],

            // Lhuentse
            ['geo_name' => 'Gangzur','dzo_id' => '6',],
            ['geo_name' => 'Khoma','dzo_id' => '6',],
            ['geo_name' => 'Jarey','dzo_id' => '6',],
            ['geo_name' => 'Kurtoed','dzo_id' => '6',],
            ['geo_name' => 'Menbi','dzo_id' => '6',],
            ['geo_name' => 'Metsho','dzo_id' => '6',],
            ['geo_name' => 'Minjay','dzo_id' => '6',],
            ['geo_name' => 'Tsenkhar','dzo_id' => '6',],

            // Mongar
            ['geo_name' => 'Balam','dzo_id' => '7',],
            ['geo_name' => 'Chali','dzo_id' => '7',],
            ['geo_name' => 'Chaskhar','dzo_id' => '7',],
            ['geo_name' => 'Drametse','dzo_id' => '7',],
            ['geo_name' => 'Drepong','dzo_id' => '7',],
            ['geo_name' => 'Gongdue','dzo_id' => '7',],
            ['geo_name' => 'Jurmey','dzo_id' => '7',],
            ['geo_name' => 'Kengkhar','dzo_id' => '7',],
            ['geo_name' => 'Mongar','dzo_id' => '7',],
            ['geo_name' => 'Narang','dzo_id' => '7',],
            ['geo_name' => 'Ngatshang','dzo_id' => '7',],
            ['geo_name' => 'Saling','dzo_id' => '7',],
            ['geo_name' => 'Shermuhoong','dzo_id' => '7',],
            ['geo_name' => 'Silambi','dzo_id' => '7',],
            ['geo_name' => 'Thangrong','dzo_id' => '7',],
            ['geo_name' => 'Tsakaling','dzo_id' => '7',],
            ['geo_name' => 'Tsamang','dzo_id' => '7',],

            // Paro
            ['geo_name' => 'Dokar','dzo_id' => '8',],
            ['geo_name' => 'Dopshari','dzo_id' => '8',],
            ['geo_name' => 'Doteng','dzo_id' => '8',],
            ['geo_name' => 'Hungrel','dzo_id' => '8',],
            ['geo_name' => 'Lamgong','dzo_id' => '8',],
            ['geo_name' => 'Lungnyi','dzo_id' => '8',],
            ['geo_name' => 'Naja','dzo_id' => '8',],
            ['geo_name' => 'Shapa','dzo_id' => '8',],
            ['geo_name' => 'Tsento','dzo_id' => '8',],
            ['geo_name' => 'Wangchang','dzo_id' => '8',],

            // Pema-gatshel
            ['geo_name' => 'Chimoong','dzo_id' => '9',],
            ['geo_name' => 'Chokhorling','dzo_id' => '9',],
            ['geo_name' => 'Chongshing','dzo_id' => '9',],
            ['geo_name' => 'Dechheling','dzo_id' => '9',],
            ['geo_name' => 'Dungmaed','dzo_id' => '9',],
            ['geo_name' => 'Khar','dzo_id' => '9',],
            ['geo_name' => 'Nanong','dzo_id' => '9',],
            ['geo_name' => 'Norbugang','dzo_id' => '9',],
            ['geo_name' => 'Shumar','dzo_id' => '9',],
            ['geo_name' => 'Yurung','dzo_id' => '9',],
            ['geo_name' => 'Zobel','dzo_id' => '9',],

            // Punakha
            ['geo_name' => 'Barp','dzo_id' => '10',],
            ['geo_name' => 'Chhubug','dzo_id' => '10',],
            ['geo_name' => 'Dzomi','dzo_id' => '10',],
            ['geo_name' => 'Goenshari','dzo_id' => '10',],
            ['geo_name' => 'Guma','dzo_id' => '10',],
            ['geo_name' => 'Kabisa','dzo_id' => '10',],
            ['geo_name' => 'Lingmukha','dzo_id' => '10',],
            ['geo_name' => 'Shenga Bjemi','dzo_id' => '10',],
            ['geo_name' => 'Talog','dzo_id' => '10',],
            ['geo_name' => 'Toepisa','dzo_id' => '10',],
            ['geo_name' => 'Toewang','dzo_id' => '10',],

            // Samdrup Jongkhar
            ['geo_name' => 'Dewathang', 'dzo_id' => '11',],
            ['geo_name' => 'Gomdar', 'dzo_id' => '11',],
            ['geo_name' => 'Langchenphu', 'dzo_id' => '11',],
            ['geo_name' => 'Lauri', 'dzo_id' => '11',],
            ['geo_name' => 'Martshala', 'dzo_id' => '11',],
            ['geo_name' => 'Orong', 'dzo_id' => '11',],
            ['geo_name' => 'Pemathang', 'dzo_id' => '11',],

            // Samtse
            ['geo_name' => 'Dungtoe', 'dzo_id' => '12',],
            ['geo_name' => 'Dorphoogchen', 'dzo_id' => '12',],
            ['geo_name' => 'Denchukha', 'dzo_id' => '12',],
            ['geo_name' => 'Namgaychholing', 'dzo_id' => '12',],
            ['geo_name' => 'Norbugang', 'dzo_id' => '12',],
            ['geo_name' => 'Norgayang', 'dzo_id' => '12',],
            ['geo_name' => 'Pemaling', 'dzo_id' => '12',],
            ['geo_name' => 'Ohentshogpelri', 'dzo_id' => '12',],
            ['geo_name' => 'Samtse', 'dzo_id' => '12',],
            ['geo_name' => 'Sangachholing', 'dzo_id' => '12',],
            ['geo_name' => 'Tading', 'dzo_id' => '12',],
            ['geo_name' => 'Tashicholing', 'dzo_id' => '12',],
            ['geo_name' => 'Tendruk', 'dzo_id' => '12',],
            ['geo_name' => 'Ugentse', 'dzo_id' => '12',],
            ['geo_name' => 'Yoseltse', 'dzo_id' => '12',],

            // Sarpang
            ['geo_name' => 'Chhuzagang', 'dzo_id' => '13',],
            ['geo_name' => 'Chhudzom', 'dzo_id' => '13',],
            ['geo_name' => 'Gakiling', 'dzo_id' => '13',],
            ['geo_name' => 'Gelephu', 'dzo_id' => '13',],
            ['geo_name' => 'Jigmecholing', 'dzo_id' => '13',],
            ['geo_name' => 'Samtenling', 'dzo_id' => '13',],
            ['geo_name' => 'Senggey', 'dzo_id' => '13',],
            ['geo_name' => 'Sherzhong', 'dzo_id' => '13',],
            ['geo_name' => 'Shompangkha', 'dzo_id' => '13',],
            ['geo_name' => 'Tarethang', 'dzo_id' => '13',],
            ['geo_name' => 'Umling', 'dzo_id' => '13',],

            // Thimphu
            ['geo_name' => 'Chang', 'dzo_id' => '14',],
            ['geo_name' => 'Darkala', 'dzo_id' => '14',],
            ['geo_name' => 'Genye', 'dzo_id' => '14',],
            ['geo_name' => 'Kawang', 'dzo_id' => '14',],
            ['geo_name' => 'Lingzhi', 'dzo_id' => '14',],
            ['geo_name' => 'Mewang', 'dzo_id' => '14',],
            ['geo_name' => 'Naro', 'dzo_id' => '14',],
            ['geo_name' => 'Soe', 'dzo_id' => '14',],

            // Trashigang
            ['geo_name' => 'Bartsham', 'dzo_id' => '15',],
            ['geo_name' => 'Bidung', 'dzo_id' => '15',],
            ['geo_name' => 'Kanglung', 'dzo_id' => '15',],
            ['geo_name' => 'Kangpar', 'dzo_id' => '15',],
            ['geo_name' => 'Khaling', 'dzo_id' => '15',],
            ['geo_name' => 'Lumang', 'dzo_id' => '15',],
            ['geo_name' => 'Merak', 'dzo_id' => '15',],
            ['geo_name' => 'Phongmed', 'dzo_id' => '15',],
            ['geo_name' => 'Radi', 'dzo_id' => '15',],
            ['geo_name' => 'Sagteng', 'dzo_id' => '15',],
            ['geo_name' => 'Samkhar', 'dzo_id' => '15',],
            ['geo_name' => 'Shongphoog', 'dzo_id' => '15',],
            ['geo_name' => 'Thrimshing', 'dzo_id' => '15',],
            ['geo_name' => 'Uzorong', 'dzo_id' => '15',],
            ['geo_name' => 'Yangnyer', 'dzo_id' => '15',],

            // Trashi Yangtse
            ['geo_name' => 'Bumdeling', 'dzo_id' => '16',],
            ['geo_name' => 'Jamkhar', 'dzo_id' => '16',],
            ['geo_name' => 'Khamdang', 'dzo_id' => '16',],
            ['geo_name' => 'Ramjar', 'dzo_id' => '16',],
            ['geo_name' => 'Toetsho', 'dzo_id' => '16',],
            ['geo_name' => 'Tomzhang', 'dzo_id' => '16',],
            ['geo_name' => 'Yalang', 'dzo_id' => '16',],
            ['geo_name' => 'Yangtse', 'dzo_id' => '16',],

            // Trongsa
            ['geo_name' => 'Dragteng', 'dzo_id' => '17',],
            ['geo_name' => 'Korphoog', 'dzo_id' => '17',],
            ['geo_name' => 'Langthil', 'dzo_id' => '17',],
            ['geo_name' => 'Bubi', 'dzo_id' => '17',],
            ['geo_name' => 'Tangsibji', 'dzo_id' => '17',],

            // Tsirang
            ['geo_name' => 'Barshong', 'dzo_id' => '18',],
            ['geo_name' => 'Dunglegang', 'dzo_id' => '18',],
            ['geo_name' => 'Gosarling', 'dzo_id' => '18',],
            ['geo_name' => 'Kikhorthang', 'dzo_id' => '18',],
            ['geo_name' => 'Mendrelgang', 'dzo_id' => '18',],
            ['geo_name' => 'Patshaling', 'dzo_id' => '18',],
            ['geo_name' => 'Phuntenchu', 'dzo_id' => '18',],
            ['geo_name' => 'Rangthangling', 'dzo_id' => '18',],
            ['geo_name' => 'Semjong', 'dzo_id' => '18',],
            ['geo_name' => 'Sergithang', 'dzo_id' => '18',],
            ['geo_name' => 'Tsholingkhar', 'dzo_id' => '18',],
            ['geo_name' => 'Tsirangtoe', 'dzo_id' => '18',],

            // Wangdue Phodrang
            ['geo_name' => 'Athang', 'dzo_id' => '19',],
            ['geo_name' => 'Bjendag', 'dzo_id' => '19',],
            ['geo_name' => 'Darkar', 'dzo_id' => '19',],
            ['geo_name' => 'Dangchu', 'dzo_id' => '19',],
            ['geo_name' => 'Gangteng', 'dzo_id' => '19',],
            ['geo_name' => 'Gasetsho Gom', 'dzo_id' => '19',],
            ['geo_name' => 'Gasetsho Wom', 'dzo_id' => '19',],
            ['geo_name' => 'Kazhi', 'dzo_id' => '19',],
            ['geo_name' => 'Nazhi', 'dzo_id' => '19',],
            ['geo_name' => 'Nyisho', 'dzo_id' => '19',],
            ['geo_name' => 'Phangyul', 'dzo_id' => '19',],
            ['geo_name' => 'Phobji', 'dzo_id' => '19',],
            ['geo_name' => 'Ruepisa', 'dzo_id' => '19',],
            ['geo_name' => 'Sephu', 'dzo_id' => '19',],
            ['geo_name' => 'Thedtsho', 'dzo_id' => '19',],

            // Zhemgang
            ['geo_name' => 'Bardo','dzo_id' => '20',],
            ['geo_name' => 'Bjoka','dzo_id' => '20',],
            ['geo_name' => 'Goshing','dzo_id' => '20',],
            ['geo_name' => 'Nangkor','dzo_id' => '20',],
            ['geo_name' => 'Ngangla','dzo_id' => '20',],
            ['geo_name' => 'Phangkar','dzo_id' => '20',],
            ['geo_name' => 'Shingkhar','dzo_id' => '20',],
            ['geo_name' => 'Trong','dzo_id' => '20',],

          ];

          Gewog::insert($gewogs);
    }
}
