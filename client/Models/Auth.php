<?php
require_once "./admin/Models/BaseModel.php";

class Auth extends BaseModel
{
    public function InsertUser($username, $password)
    {
        $sql = "INSERT INTO `tb_khachhang`(`username`,`password`) VALUES('$username','$password')";
        return $this->SqlExecute($sql, 0);
    }

    public function GetAllUser($username, $password)
    {
        $sql = "SELECT `username`, `password`  FROM `tb_khachhang` WHERE `username` = '$username' AND `password` = '$password'";
        return $this->SqlExecute($sql, 2);
    }

    public function GetUserDetails($username)
    {
        $sql = "SELECT *  FROM `tb_khachhang` WHERE username = '$username'";
        return $this->SqlExecute($sql, 2);
    }
}
