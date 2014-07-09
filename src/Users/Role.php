<?php namespace Raymondidema\UserPackage\Users;

use Eloquent;
use Raymondidema\UserPackage\Traits\RoleTrait;

class Role extends Eloquent {

    /**
     * @var array
     */
    protected $fillable = ['name'];
} 