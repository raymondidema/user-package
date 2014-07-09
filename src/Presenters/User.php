<?php namespace Raymondidema\UserPackage\Presenters;

use Raymondidema\Presenter\Presenter;

class User extends Presenter {

    public function fullName()
    {
        return $this->entity->first_name . ' ' . $this->entity->last_name;
    }
} 