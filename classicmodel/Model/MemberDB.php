<?php


namespace Model;


class UserNameDB
{
    public $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function userLogin($userName, $password)
    {
        $sql = " SELECT * FROM member WHERE username =? AND password =?";
        $stmt = $this->conn->prepare($sql);
        $stmt-> bindParam(1,$userName);
        $stmt-> bindParam(2,$password);
        $stmt -> execute();
        $result = $stmt->fetch();
        if ($result)
        {
            return true;
        }else{
            return false;
        }
    }


}