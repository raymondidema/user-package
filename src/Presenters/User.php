<?php namespace Raymondidema\UserPackage\Presenters;

use Raymondidema\Presenter\Presenter;

class User extends Presenter {

    /**
     * Getting de fullName of the user
     * @return string
     */
    public function fullName()
    {
        return $this->entity->first_name . ' ' . $this->entity->last_name;
    }
} 