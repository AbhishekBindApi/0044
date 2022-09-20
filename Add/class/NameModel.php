<?php
class NameModel
{
    public $conn;
    public function __construct()
    {
        $server = "localhost";
        $user = "root";
        $dbname ="gurukulampro_dev2";
        $pass = "";

        $this->conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    }
    
    public function saveName($data)
    {
        $sql = "INSERT INTO input(first_name, second_name, mobile) VALUES (?, ?, ?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['first_name'], $data['second_name'], $data['mobile']]);
    } 
}