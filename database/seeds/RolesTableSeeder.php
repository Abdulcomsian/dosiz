<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();

        DB::table('roles')->insert(['name' => 'Admin','guard_name' => 'web']);
        DB::table('roles')->insert(['name' => 'Brand Manager','guard_name' => 'web']);
        DB::table('roles')->insert(['name' => 'Brand Employee','guard_name' => 'web']);
        DB::table('roles')->insert(['name' => 'User','guard_name' => 'web']);
    }
}
