<?php
include_once 'config.php';
class DB {
private $mysql ;
    function init ($type,$host,$dbname,$uname,$pwd){
         $db ="$type:host=$host;dbname=$dbname;charset=UTF8";
         $this->mysql = new PDO($db,$uname,$pwd);      
    }
    function query($sql){
        $this->mysql->query("SET NAMES utf8");
        $stmt  = $this->mysql->query($sql);
        $rows = $stmt->rowCount();
        return $rows;
    }
}
$mysql = new DB;
$mysql->init($db_type,$db_host,$db_name,$db_user,$db_password);
?>