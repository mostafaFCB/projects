<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;



class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Mostafa Hamdi',
            'email'    => 'admin@yahoo.com',
            'password'   =>  Hash::make('admin'),
            'age'         =>  '29',
            'phone'      =>  '291111111',
            'remember_token' =>  str_random(10),
        ]);
    }
}
