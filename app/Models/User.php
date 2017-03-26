<?php

namespace App\Models;

class User
{
    protected $first_name;
    protected $last_name;
    public $email;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = trim($last_name);
    }

    public function setFirstName($firstname) {

        $this->first_name = trim($firstname);

    }

    public function getFirstName() {

//        return 'Billy';
        return $this->first_name;
    }

    public function getFullName() {
//        return 'Billy Clinton';

//        return $this->getFirstName() . ' ' . $this->getLastName();

        return $this->first_name . ' ' . $this->last_name;
//        return "$this->first_name $this->last_name";
    }

}