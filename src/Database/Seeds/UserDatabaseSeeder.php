<?php

class UserDatabaseSeeder extends \Seeder {

    public function run()
    {
        Eloquent::unguard();
        $this->call('RoleTableSeeder');
    }
}