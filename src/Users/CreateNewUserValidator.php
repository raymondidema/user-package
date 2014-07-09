<?php namespace Raymondidema\UserPackage\Users;

use Raymondidema\UserPackage\Forms\Register;

class CreateNewUserValidator {

    /**
     * @var
     */
    protected $formData;

    /**
     * @param Register $formData
     */
    function __construct(Register $formData)
    {
        $this->formData = $formData;
    }


    /**
     * @param CreateNewUserCommand $command
     */
    public function validate(CreateNewUserCommand $command)
    {
        $this->formData->validate([
            'email' => $command->email,
            'first_name' => $command->first_name,
            'last_name' => $command->last_name,
            'password' => $command->password
        ]);
    }
}