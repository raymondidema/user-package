<?php namespace Raymondidema\UserPackage\Database\Seeds;

use DB;
use Eloquent;
use Raymondidema\UserPackage\Users\Role;
use Seeder;

class RoleTableSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();
        DB::table('roles')->delete();

        Role::create(['name' => 'member']);
        Role::create(['name' => 'administrator']);
    }

} 