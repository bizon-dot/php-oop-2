<?php

class User
{

    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $premium;

    public function _construct($id, $firstName, $lastName, $email, $phone, $premium = false)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;

    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_firstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function get_firstName()
    {
        return $this->firstName;
    }

    public function set_lastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function get_lastName()
    {
        return $this->lastName;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_phone($phone)
    {
        $this->phone = $phone;
    }

    public function get_phone()
    {
        return $this->phone;
    }

    public function is_premium($id,$premium)
    {
        $idsPremium = [ "123" , " 234", "456"];
        is_array($id,$idsPremium) ? $premium = true : $premium = false;
        return $premium;
    }



}
