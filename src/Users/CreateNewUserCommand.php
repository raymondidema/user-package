<?php namespace Raymondidema\UserPackage\Users;

class CreateNewUserCommand {

    /**
     * @var
     */
    public $first_name;

    /**
     * @var
     */
    public $last_name;

    /**
     * @var
     */
    public $email;

    /**
     * @var
     */
    public $password;

    /**
     * @param $email
     * @param $first_name
     * @param $last_name
     * @param $password
     */
    function __construct($email, $first_name, $last_name, $password)
    {
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password = $password;
    }

}