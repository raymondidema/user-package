<?php namespace Raymondidema\UserPackage\Forms;

use Raymondidema\Validator\FormValidator;

class Register extends FormValidator {

    /**
     * @var array
     */
    protected $rules = [
        'email' => 'required|unique:users|email',
        'first_name' => 'required',
        'last_name' => 'required',
        'password' => 'required|min:8'
    ];
}