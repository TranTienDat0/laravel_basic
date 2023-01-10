<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\userModel;

class UserTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
        foreach(range(1,100) as $i){
            userModel::Create([
                'mail_address' => $faker->email,
                'password'=>md5($faker->password),
                'nam'=>$faker->name,
                'address'=>$faker->address,
                'phone'=>$faker->phoneNumber

            ]);
        }
    }
}
