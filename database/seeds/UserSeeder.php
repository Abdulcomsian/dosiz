<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            User::truncate();
            // DB::table('roles')->truncate();

            $adminRole = DB::table('roles')->where('name','Admin')->first();

            $brandManagerRole = DB::table('roles')->where('name','Brand Manager')->first();
            $brandEmployeeRole = DB::table('roles')->where('name','Brand Employee')->first();
            $userRole = DB::table('roles')->where('name','User')->first();

            $admin = User::create([
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'phone' => '03005456559',
                'address' => 'Islamabad, Pakistan',
                'description' => 'this is descripion header',
                'date_of_birth' => '2022-02-01',
                'password' => Hash::make('password1')
            ]);

            $brandManager = User::create([
                'name' => 'Brand Manager User',
                'email' => 'brand_manager@gmail.com',
                'phone' => '03005456559',
                'address' => 'Islamabad, Pakistan',
                'description' => 'this is descripion header',
                'date_of_birth' => '2022-02-01',
                'password' => Hash::make('password1')
            ]);

            $brandEmployee = User::create([
                'name' => 'Admin User',
                'email' => 'brand_employee@gmail.com',
                'phone' => '03005456559',
                'address' => 'Islamabad, Pakistan',
                'description' => 'this is descripion header',
                'date_of_birth' => '2022-02-01',
                'password' => Hash::make('password1')
            ]);

            $user = User::create([
                'name' => 'Admin User',
                'email' => 'user@gmail.com',
                'phone' => '03005456559',
                'address' => 'Islamabad, Pakistan',
                'description' => 'this is descripion header',
                'date_of_birth' => '2022-02-01',
                'password' => Hash::make('password1')
            ]);

            // $admin->roles()->attach($adminRole);
            // $brandManager->roles()->attach($brandManagerRole);
            // $brandEmployee->roles()->attach($brandEmployeeRole);
            // $user->roles()->attach($userRole);
            $admin->assignRole($adminRole->name);
            $brandManager->assignRole($brandManagerRole->name);
            $brandEmployee->assignRole($brandEmployeeRole->name);
            $user->assignRole($userRole->name);
        }
    }
}
