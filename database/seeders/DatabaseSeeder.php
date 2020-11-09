<?php

namespace Database\Seeders;
use App\Models\Month;
use App\Models\Harvest;
use App\Models\Illumination;
use App\Models\Sowing_type;
use App\Models\Vegetable;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*/ \App\Models\User::factory(10)->create();
        //crear meses
        //1
        $month1 = new Month();
        $month1->name = 'Enero';
        $month1->save();  
    
        $month2 = new Month();
        $month2->name = 'Febrero';
        $month2->save();
        //3
        $month3 = new Month();
        $month3->name = 'Marzo';
        $month3->save();
        //4
        $month4 = new Month();
        $month4->name = 'Abril';
        $month4->save();
        //5
        $month5 = new Month();
        $month5->name = 'Mayo';
        $month5->save();
        //6
        $month6 = new Month();
        $month6->name = 'Junio';
        $month6->save();
        //7
        $month7 = new Month();
        $month7->name = 'Julio';
        $month7->save();
        //8
        $month8 = new Month();
        $month8->name = 'Agosto';
        $month8->save();
        //9
        $month9 = new Month();
        $month9->name = 'Septiembre';
        $month9->save();
        //10
        $month10 = new Month();
        $month10->name = 'Octubre';
        $month10->save();
        //11
        $month11 = new Month();
        $month11->name = 'Noviembre';
        $month11->save();
        //12
        $month12 = new Month();
        $month12->name = 'Diciembre';
        $month12->save();*/

        /*crear cosechas harversts
        $harvest1 = new Harvest();
        $harvest1->day = 80;
        $harvest1->month  = 2.6;
        $harvest1->save();
        //2
        $harvest2 = new Harvest();
        $harvest2->day = 90;
        $harvest2->month  = 3.0;
        $harvest2->save();
        //3
        $harvest3 = new Harvest();
        $harvest3->day = 100;
        $harvest3->month  = 3.2;
        $harvest3->save();
        //4
        $harvest4 = new Harvest();
        $harvest4->day = 120;
        $harvest4->month  = 4.0;
        $harvest4->save();
        //5
        $harvest5 = new Harvest();
        $harvest5->day = 130;
        $harvest5->month  = 4.2;
        $harvest5->save();
        //6
        $harvest6 = new Harvest();
        $harvest6->day = 180;
        $harvest6->month  = 6.0;
        $harvest6->save();
        //7
        $harvest7 = new Harvest();
        $harvest7->day = 200;
        $harvest7->month  = 6.5;
        $harvest7->save();
        */

        /*/crear iluminacion
        //1
        $illu1 = new Illumination();
        $illu1->name= 'Sol';
        $illu1->save();
        //2
        $illu2 = new Illumination();
        $illu2->name= 'Semisombra';
        $illu2->save();
        */

        /*/crear tipos de siembra
        //1
        $sowing1 = new Sowing_type();
        $sowing1->name= 'Almácigo';
        $sowing1->save();
        //2
        $sowing2 = new Sowing_type();
        $sowing2->name= 'Siembra directa';
        $sowing2->save();
        //3
        $sowing3 = new Sowing_type();
        $sowing3->name= 'Almácigo o siembra directa';
        $sowing3->save();
        */

        //agregar vegetales
        //1
        $vege1 = new Vegetable();
        $vege1->name= 'Tomate';
        $vege1->illumination_id = 1;
        $vege1->harvest_id = 1;
        $vege1->sowing_type_id = 1;
        $vege1->save();
        //2
        $vege2 = new Vegetable();
        $vege2->name= 'Pimenton';
        $vege2->illumination_id = 1;
        $vege2->harvest_id = 2;
        $vege2->sowing_type_id = 1;
        $vege2->save();









    }
}
