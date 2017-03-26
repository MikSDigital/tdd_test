<?php

namespace App\Models;

class User
{
    public $email;
    protected $first_name;
    protected $last_name;

    public function getEmailVariables()
    {
        return [
            'full_name' => $this->getFullName(),
            'email'     => $this->getEmail()
        ];
    }

    public function getFullName()
    {
//        return 'Billy Clinton';

//        return $this->getFirstName() . ' ' . $this->getLastName();

        return $this->first_name . ' ' . $this->last_name;
//        return "$this->first_name $this->last_name";
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = trim($last_name);
    }

    public function getFirstName()
    {

//        return 'Billy';
        return $this->first_name;
    }

    public function setFirstName($firstname)
    {

        $this->first_name = trim($firstname);

    }

}