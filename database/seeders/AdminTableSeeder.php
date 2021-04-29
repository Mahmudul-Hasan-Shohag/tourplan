<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
'name'=>'admin',
'email'=>'sadia@gmail.com',
'password'=>bcrypt('123456'),
'role'=>'admin',
'number'=>'01642469922'

       ]);
    }
}
