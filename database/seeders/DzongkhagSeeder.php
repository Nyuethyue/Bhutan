<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dzongkhag;

class DzongkhagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dzongkhags =  [
            [
              'dzo_name' => 'Bumthang',
            ],
            [
                'dzo_name' => 'Chhukha',
            ],
            [
              'dzo_name' => 'Dagana',
            ],
            [
              'dzo_name' => 'Gasa',
            ],
            [
              'dzo_name' => 'Haa',
            ],
            [
              'dzo_name' => 'Lhuntse',
            ],
            [
              'dzo_name' => 'Mongar',
            ],
            [
              'dzo_name' => 'Paro',
            ],
            [
              'dzo_name' => 'Pema Gatshel',
            ],
            [
              'dzo_name' => 'Punakha',
            ],
            [
              'dzo_name' => 'Samdrup Jongkhar',
            ],
            [
              'dzo_name' => 'Samtse',
            ],
            [
              'dzo_name' => 'Sarpang',
            ],
            [
              'dzo_name' => 'Thimphu',
            ],
            [
              'dzo_name' => 'Trashigang',
            ],
            [
              'dzo_name' => 'Trashi Yangtse',
            ],
            [
              'dzo_name' => 'Trongsa',
            ],
            [
              'dzo_name' => 'Tsirang',
            ],
            [
              'dzo_name' => 'Wangdue Phodrang',
            ],
            [
              'dzo_name' => 'Zhemgang',
            ],
          ];

          Dzongkhag::insert($dzongkhags);
    }
}
