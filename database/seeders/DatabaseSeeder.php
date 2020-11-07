<?php

namespace Database\Seeders;
use App\Models\Month;

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
        // \App\Models\User::factory(10)->create();
        //1
        $month1 = new Month();
        $month1->name = 'Enero';
        $month1->save();  
        //2
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
        $month12->save();


    }
}
