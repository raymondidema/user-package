<?php namespace Raymondidema\UserPackage\Users;

class CreateNewUserCommand {

    public $first_name;

    public $last_name;

    public $email;

    public $password;

    function __construct($email, $first_name, $last_name, $password)
    {
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password = $password;
    }

}