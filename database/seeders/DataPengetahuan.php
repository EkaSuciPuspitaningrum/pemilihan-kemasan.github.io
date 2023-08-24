<?php

namespace Database\Seeders;

use App\Models\BasisPengetahuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPengetahuan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BasisPengetahuan::insert([
            //PET/PETE
            ['id'=>1,  'jenis_kemasan_id' => 1, 'kriteria_id' => 1, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>2,  'jenis_kemasan_id' => 1, 'kriteria_id' => 2, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>3,  'jenis_kemasan_id' => 1, 'kriteria_id' => 3, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>4,  'jenis_kemasan_id' => 1, 'kriteria_id' => 4, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>5,  'jenis_kemasan_id' => 1, 'kriteria_id' => 5, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>6,  'jenis_kemasan_id' => 1, 'kriteria_id' => 7, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>7,  'jenis_kemasan_id' => 1, 'kriteria_id' => 9, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>8 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 10, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>9 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 11, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>10 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 13, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>11 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 14, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>12 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 15, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>13 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 16, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>14 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 18, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>15 , 'jenis_kemasan_id' => 1, 'kriteria_id' => 19, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],

            //HDPE
            ['id'=>16, 'jenis_kemasan_id' => 2, 'kriteria_id' => 1, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>17 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 2, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>18 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 4, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ], 
            ['id'=>19 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 5, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>20 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 7, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>21 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 8, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>22 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 9, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>23 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 10, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>24 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 12, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>25 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 13, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>26 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 14, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>27 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 15, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>28 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 16, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>29 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 17, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>30 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 18, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>31 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 19, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>32 , 'jenis_kemasan_id' => 2, 'kriteria_id' => 20, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],

            //PVC
            ['id'=>33, 'jenis_kemasan_id' => 3, 'kriteria_id' => 1, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>34 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 2, 'cf' => '0.2', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>35 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 3, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],   
            ['id'=>36 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 4, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>37 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 5, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>38 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 7, 'cf' => '0.2', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>39 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 9, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>40 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 10, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>41 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 12, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>42 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 14, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>43 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 15, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>44 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 16, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>45 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 18, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>46 , 'jenis_kemasan_id' => 3, 'kriteria_id' => 19, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            
            //LDPE
            ['id'=>47 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 1, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>48 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 2, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],   
            ['id'=>49 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 3, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],   
            ['id'=>50 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 4, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>51 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 5, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>52 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 7, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>53 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 9, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>54 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 10, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>55 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 12, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>56 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 13, 'cf' => '0.4', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>57 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 14, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>58 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 15, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>59 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 16, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>60 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 17, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>61 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 18, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>62 , 'jenis_kemasan_id' => 4, 'kriteria_id' => 19, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],

            //PP
            ['id'=>63 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 2, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],   
            ['id'=>64 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 3, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],   
            ['id'=>65 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 4, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],   
            ['id'=>66 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 5, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>67 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 7, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>68 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 10, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>69 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 13, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>70 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 14, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>71 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 15, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>72 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 16, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>73 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 17, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>74 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 18, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>75 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 19, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>76 , 'jenis_kemasan_id' => 5, 'kriteria_id' => 20, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],

            //NYLON
            ['id'=>77 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 1, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>78 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 2, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],  
            ['id'=>79 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 3, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>80 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 6, 'cf' => '0,2', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>81 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 7, 'cf' => '0,6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>82 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 8, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ], 
            ['id'=>83 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 9, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>84 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 10, 'cf' => '0.6', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>85 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 14, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>86 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 15, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>87 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 16, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>88 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 17, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>89 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 18, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>90 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 19, 'cf' => '1', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
            ['id'=>91 , 'jenis_kemasan_id' => 6, 'kriteria_id' => 20, 'cf' => '0.8', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s") ],
        ]);
}
}