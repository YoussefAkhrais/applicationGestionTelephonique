<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $password=Hash::make('sothema_app@12/9*');
        admin::create(
            ["nameAdmin"=>"sothema_app",
            "password"=>$password,
            "typeUser"=>"user"],
        );


        $password=Hash::make('hamza_oussayeh@12/9*');
        admin::create(
            ["nameAdmin"=>"hamza_oussayeh",
            "password"=>$password,
            "typeUser"=>"admin"],
        );

    
    }
}
