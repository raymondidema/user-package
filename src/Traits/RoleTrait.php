<?php namespace Raymondidema\UserPackage\Traits;


trait RoleTrait {
    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $name) return true;
        }
        return false;
    }

    public function assignRole($role)
    {
        $this->roles()->attach($role);
    }

    public function revokeRole($role)
    {
        $this->roles()->detach($role);
    }
} 