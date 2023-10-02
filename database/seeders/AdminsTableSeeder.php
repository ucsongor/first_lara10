<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456789');
        $adminRecords = [
            ['id'=>1,'name'=>'Admin1','type'=>'admin','mobile'=>36123456789,'email'=>'admin1@admin.admin','password'=>$password,'image'=>'','status'=>1],
            ['id'=>2,'name'=>'Admin2','type'=>'admin','mobile'=>36123456788,'email'=>'admin2@admin.admin','password'=>$password,'image'=>'','status'=>1],
            ['id'=>3,'name'=>'Admin3','type'=>'admin','mobile'=>36123456787,'email'=>'admin3@admin.admin','password'=>$password,'image'=>'','status'=>1],
            ['id'=>4,'name'=>'Admin4','type'=>'admin','mobile'=>36123456786,'email'=>'admin4@admin.admin','password'=>$password,'image'=>'','status'=>1],
            ['id'=>5,'name'=>'Admin5','type'=>'admin','mobile'=>36123456785,'email'=>'admin5@admin.admin','password'=>$password,'image'=>'','status'=>1]
        ];
        Admin::insert($adminRecords);
    }
}
