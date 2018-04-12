<?php
header("content-Type:text/html;charser=UTF8");
include 'config.php';
 // for  Img_Info init
$db ="$db_type:host=$db_host;dbname=$db_name;charset=UTF8";
//this obj get img info from db 
class Img {
  private $db_info;
  private $db_user;
  private $db_pwd;
  public  $img_info = array();

 function Init($db,$user,$pwd) {
   $this->db_info = $db;
   $this->db_usr = $user;
   $this->db_pw  = $pwd;
 }
//pdo query
 function get_info(){
  try {
    global $db_table_name;
    $sql ="select info_name,file_name,descriptor,title,big_img from $db_table_name ";
    $con = new  PDO($this->db_info,$this->db_usr,$this->db_pw);
    $con->query("SET NAMES utf8");
    $stmt  = $con->query($sql);
    $rows = $stmt->fetchAll();
    foreach($rows as $row) { //2维数组
    $this->img_info[$row["info_name"]]=array($row["file_name"],$row["descriptor"],$row["title"],$row["big_img"]);
     }
    }catch(PDOException $e) {
    echo 'pdo failed:'.$e->getMessage();
    }
 }
 function get_path($img_name){
  echo $this->img_info[$img_name][0];
 }
 function get_descript($img_name){
  echo $this->img_info[$img_name][1];
 }
 function get_title($img_name){
  echo $this->img_info[$img_name][2];
 }
 function get_big($img_name){
  echo $this->img_info[$img_name][3];
 }
} //img class end

$img = new Img;
$img->Init($db,$db_user,$db_password);
$img->get_info();
//print_r($img->img_info);
//$img->get_path("homg_01");

?>
