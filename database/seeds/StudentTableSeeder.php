<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();
        
        DB::table('students')->insert([
            //ce
                ['index_no' => '42400114','ref_no' => '00002120','student_name' => 'ABADU BANABAS AVE',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42400214','ref_no' => '00002120','student_name' => 'ABUAH-QUANSAH FRANCIS',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42400314','ref_no' => '00002120','student_name' => 'ABUGAH DEBORAH (MISS)',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42400414','ref_no' => '00002120','student_name' => 'ACQUAH JOSEPH HAYFRON',
                    'dept_id' => 'CE', 'year' => '2014'
                ],
                ['index_no' => '42400514','ref_no' => '00002120','student_name' => 'ADAMU ABUBAKARI',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42400614','ref_no' => '00002120','student_name' => 'ADDICO JUSTICE AWULEY',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42400714','ref_no' => '00002120','student_name' => 'ADDY RICHARD',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42400814','ref_no' => '00002120','student_name' => 'ADUSEI JEFFERY',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42400914','ref_no' => '00002120','student_name' => 'AFRIFA EBENEZER KWAKU OPPONG',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401014','ref_no' => '00002120','student_name' => 'AGBOADA TIMOTHY AUGUSTINE',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401114','ref_no' => '00002120','student_name' => 'AGYEMANG SAMUEL',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401214','ref_no' => '00002120','student_name' => 'AIDOO ALBERT',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401314','ref_no' => '00002120','student_name' => 'AMOAKO RICHARD FOSU',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401414','ref_no' => '00002120','student_name' => 'AMPIM OFOSUHENE KENNETH',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401514','ref_no' => '00002120','student_name' => 'AMPONSAH MICHAEL',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401614','ref_no' => '00002120','student_name' => 'AMUZU STEPHEN COLONEL',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401714','ref_no' => '00002120','student_name' => 'ANANE SAMUEL',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401814','ref_no' => '00002120','student_name' => 'APEKO JEWEL DONKOR',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42401914','ref_no' => '00002120','student_name' => 'APPIAH-MENSAH LAWRENCIA (MISS)',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402014','ref_no' => '00002120','student_name' => 'ASARE MATTHEW AYIRIFA',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402114','ref_no' => '00002120','student_name' => 'AVOKE DANIEL SELORM',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402214','ref_no' => '00002120','student_name' => 'AWORTWI EMMANUEL KOJO',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402314','ref_no' => '00002120','student_name' => 'AYISAH IAN OFOE',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402414','ref_no' => '00002120','student_name' => 'BOATENG GODFRED AGYEI',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402514','ref_no' => '00002120','student_name' => 'BOATENG RICHMOND',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402614','ref_no' => '00002120','student_name' => 'BOSU KINGSLEY KWASI',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402714','ref_no' => '00002120','student_name' => 'COBBINAH NATHANIEL',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402814','ref_no' => '00002120','student_name' => 'COMMEY MICHAEL KOFI',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42402914','ref_no' => '00002120','student_name' => 'DEHO OSCAR BLESSED',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403014','ref_no' => '00002120','student_name' => 'DERBY WAHEED DAUDA',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403114','ref_no' => '00002120','student_name' => 'DOE ANTHONY',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403214','ref_no' => '00002120','student_name' => 'DOGBEY STEPHEN',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403314','ref_no' => '00002120','student_name' => 'GAKU ELLIOT KOJO',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403414','ref_no' => '00002120','student_name' => 'GAMBRAH ANTWI',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403514','ref_no' => '00002120','student_name' => 'GAMLIE AUGUSTINE MAKAFUI',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403614','ref_no' => '00002120','student_name' => 'HOLDBROOK RICHARD',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403714','ref_no' => '00002120','student_name' => 'KOFIGAH EUGENE ABRAHAM',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403814','ref_no' => '00002120','student_name' => 'KONADU ODAME JOSEPH',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42403914','ref_no' => '00002120','student_name' => 'KWOFIE REXFORD',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404014','ref_no' => '00002120','student_name' => 'LEDI AGBEYEYE KOFFI',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404114','ref_no' => '00002120','student_name' => 'MENSAH KWAME FRIMPONG',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404214','ref_no' => '00002120','student_name' => 'MIKE EDWARD',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404314','ref_no' => '00002120','student_name' => 'NERQUAYE-TETTEH SEAN',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404414','ref_no' => '00002120','student_name' => 'NYAMADOR ENOCK SETH',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404514','ref_no' => '00002120','student_name' => 'OPOKU GIDEON AGYEMAN',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404614','ref_no' => '00002120','student_name' => 'OWUSU EMMANUEL ASIAMAH',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404714','ref_no' => '00002120','student_name' => 'PADI JOHN',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404814','ref_no' => '00002120','student_name' => 'PINAMANG GILBERT BOATENG',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42404914','ref_no' => '00002120','student_name' => 'SASU PRISCILLA KISSIWAA (MISS)',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42405014','ref_no' => '00002120','student_name' => 'TENKORANG PAUL',
                    'dept_id' => 'CE', 'year' => '2014',
                ],
                ['index_no' => '42405114','ref_no' => '00002120','student_name' => 'YEBOAH BISMARK',
                    'dept_id' => 'CE', 'year' => '2014',
                ],

                ['index_no' => '42202114','ref_no' => '00001040','student_name' => 'Sean Corey Carter',
                    'dept_id' => 'EL', 'year' => '2014',
                ],
                ['index_no' => '42402915','ref_no' => '000305515','student_name' => 'Frank Mark Willingham',
                    'dept_id' => 'CE', 'year' => '2015',
                ]


                    
        ]
        );
    }
}
