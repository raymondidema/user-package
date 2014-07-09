<?php namespace Raymondidema\UserPackage\Database\Seeds;

use Eloquent;
use Seeder;

class UserDatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();
        $this->call('Raymondidema\UserPackage\Database\Seeds\RoleTableSeeder');
    }
}