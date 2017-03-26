<?php

namespace App\Models;

class User
{
    public $first_name;
    public $last_name;

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
        $this->last_name = $last_name;
    }
    public function getFirstName() {

//        return 'Billy';
        return $this->first_name;
    }
    public function setFirstName($firstname) {

        $this->first_name = $firstname;

    }

    public function getFullName() {
//        return 'Billy Clinton';

//        return $this->getFirstName() . ' ' . $this->getLastName();

        return $this->first_name . ' ' . $this->last_name;
//        return "$this->first_name $this->last_name";
    }

}