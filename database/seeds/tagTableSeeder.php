<?php

use Illuminate\Database\Seeder;

class tagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $status = 1 ;
        $faker = Faker\Factory::create();
        $datas = [];
        foreach (range(1, 10) as $key => $value) {
            $datas[] = [
                'name' =>  'tag'.$faker->word ,
                'description' =>  $faker->text ,
                'status'=>$status,
                'created_at' => new DateTime()
            ];
        }
        DB::table('tag')->insert($datas);
    }
}
