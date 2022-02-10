<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Java',
                'price'=>'800',
                'category'=> 'Language',
                'description'=>'60 hours course. Taught by Colt Scmith. It will cover all basic to advanced topics.....',
                'gallery'=>'https://www.academicrelated.com/wp-content/uploads/2021/01/Best-Online-Courses-for-Java.jpg'
            ],
            [
                'name'=>'ReactJS',
                'price'=>'400',
                'category'=> 'Front-End',
                'description'=>'30 hours course that will teach you the syntax used, some small games and 1 big project',
                'gallery'=>'http://www.greenstechnologys.com/images/reactjs.jpg'
            ],
            [
                'name'=>'Machine Learning Bootcamp',
                'price'=>'600',
                'category'=> 'Machine Learning',
                'description'=>'30 hours course that will teach you the syntax used, some small games and 1 big project',
                'gallery'=>'https://miro.medium.com/max/720/1*ks3jjWvs2IhxfplYCUDfFQ.jpeg'
            ],
            [
                'name'=>'Robotics',
                'price'=>'900',
                'category'=> 'Machine Learning',
                'description'=>'30 hours course that will teach you the syntax used, some small games and 1 big project',
                'gallery'=>'https://coursecouponclub.com/wp-content/uploads/2021/02/3759560_5df5_4.jpg'
            ],
 
        ]);
    
    }
}
