<?php namespace Raymondidema\UserPackage\Traits;


trait RoleTrait {
    /**
     * @param $name
     *
     * @return bool
     */
    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $name) return true;
        }
        return false;
    }

    /**
     * @param $role
     */
    public function assignRole($role)
    {
        $this->roles()->attach($role);
    }

    /**
     * @param $role
     */
    public function revokeRole($role)
    {
        $this->roles()->detach($role);
    }
} 