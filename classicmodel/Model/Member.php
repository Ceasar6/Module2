<?php


namespace Model;


class UserName
{
    public $userName;
    public $password;
    public function __construct($username, $password)
    {
        $this->userName = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }
}