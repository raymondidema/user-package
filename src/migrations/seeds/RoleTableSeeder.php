<?php

use Raymondidema\UserPackage\Users\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder {
    public function run()
    {
        DB::table('roles')->delete();

        Role::create(['name' => 'member']);
        Role::create(['name' => 'administrator']);
    }
} 