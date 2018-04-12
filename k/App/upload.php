<?php 
include 'db.php';
include 'config.php';

$img_path=$root."home/images/";
$img_url= "./images/";  // 相对路径 记录的是主页的图片文件夹路径



  //home界面图的 url文件路径  
class upload {
 private $handler;  //  obj of the handler
 public $ret_status;   
    function response() {       
      $item = $_POST["position"];
      $item = htmlspecialchars($item);
      if($item == "")       // not commit
         return;
      $err =  $this->make_handler();
      if($err == 0) {
         echo "Invalid input please check it ";
         return;
      }
         $this->handler->perform();   //call the handler function
         echo $this->handler->ret_status;   //display info
         return;
       }
    //build the handler
    function make_handler(){
        $item = $_POST["position"];
        $item = htmlspecialchars($item);
        if($item == "home") 
          $this->handler = new info_home;
        else if($item == "design") 
          $this->handler = new info_design;
        else if($item == "model") 
          $this->handler = new info_model;
        else if($item == "team") 
          $this->handler = new info_team;
        else if($item == "aboutus") 
          $this->handler = new info_aboutus;
        else if($item == "Contact") 
          $this->handler = new info_contact;
          else if($item == "admin") 
          $this->handler = new info_admin;
          else if($item == "warpper") 
          $this->handler = new info_warpper;
        else {
         return 0;
        }
     return 1;  
    }

 protected  function check_input($input){
           $input =trim($input);
     return  htmlspecialchars($input);
    }
}

// class   child
class info_home extends upload{
        function perform(){ 
        //file upload
        if($_FILES["small"]["error"] >0 ||         //file error
           $_FILES["big"]["error"]  > 0     //file size
        ){
          $this->ret_status="文件上传错误";
          return 0;
        }else {
          //make sql;
          global  $img_path;
          global  $img_url;
          global  $db_table_name;
          $number = $this-> check_input($_POST["number"]);           //number
   
          $img_numb ='home'.'_0'.$number;                                   //info_name
          $s_p =$img_url."home_0".$number.".jpg";             // small img path
          $b_p =$img_url."home_big_0".$number.".jpg";       // small img path
          $title = $this->check_input($_POST["title"]);                      //title
          $desc =$this->check_input($_POST["desc"]);                     //desc
          $sql = "update $db_table_name  set  file_name = '$s_p',    
                     descriptor = '$desc',
                     title =' $title',
                     big_img =' $b_p '
                     where info_name = '$img_numb'"; //sql
  echo $sql ;  
          // save images;
          $sp =$img_path."home_0".$number.".jpg";             // small img path
          $bp=$img_path."home_big_0".$number.".jpg";       // small img path
         move_uploaded_file($_FILES["small"]["tmp_name"], $sp);
         move_uploaded_file($_FILES["big"]["tmp_name"],    $bp);
         global $mysql;  
         $r =  $mysql->query($sql);
        if($r==1) 
           $this->ret_status="更新成功";
        else
           $this->ret_status="更新失败";
       }
    } //function
 } //class 

 class info_design extends upload{
  function perform(){ 
    //file upload
    if($_FILES["small"]["error"] >0 ||         //file error
       $_FILES["big"]["error"]  > 0     //file size
    ){
      $this->ret_status="文件上传错误";
      return 0;
    }else {
      //make sql;
      global  $img_path;
      global  $img_url;
      global  $db_table_name;
      $number = $this-> check_input($_POST["number"]);           //number

      $img_numb ='design'.'_0'.$number;                                   //info_name
      $s_p =$img_url."design_0".$number.".jpg";             // small img path
      $b_p =$img_url."design_big_0".$number.".jpg";       // small img path
      $title = $this->check_input($_POST["title"]);                      //title
      $desc =$this->check_input($_POST["desc"]);                     //desc
      $sql = "update $db_table_name set  file_name = '$s_p',    
                 descriptor = '$desc',
                 title =' $title',
                 big_img =' $b_p '
                 where info_name = '$img_numb'"; //sql
    
      // save images;
      $sp =$img_path."design_0".$number.".jpg";             // small img path
      $bp=$img_path."design_big_0".$number.".jpg";       // small img path
     move_uploaded_file($_FILES["small"]["tmp_name"], $sp);
     move_uploaded_file($_FILES["big"]["tmp_name"],    $bp);
     global $mysql;  
     $r =  $mysql->query($sql);
    if($r==1) 
       $this->ret_status="更新成功";
    else
       $this->ret_status="更新失败";
   }
  } //function
}


class info_model extends upload{
  function perform(){ 
    //file upload
    if($_FILES["pic"]["error"] >0 )       //file error
      {
      $this->ret_status="文件上传错误";
      return 0;
    }else {
      //make sql;
      global  $img_path;
      global  $img_url;
      global  $db_table_name;
      $number = $this-> check_input($_POST["number"]);           //number

      $img_numb ='model'.'_0'.$number;                                   //info_name
      $p_p =$img_url."model_0".$number.".jpg";             // small img path
      $title = $this->check_input($_POST["title"]);                      //title
      $desc =$this->check_input($_POST["desc"]);                     //desc
      $sql = "update $db_table_name  set  file_name = '$p_p',    
                 descriptor = '$desc',
                 title =' $title'
                 where info_name = '$img_numb'"; //sql
 
      // save images;
      $p =$img_path."model_0".$number.".jpg";             // small img path
     move_uploaded_file($_FILES["pic"]["tmp_name"], $p);
     global $mysql;  
     $r =  $mysql->query($sql);
    if($r==1) 
       $this->ret_status="更新成功";
    else
       $this->ret_status="更新失败";
   }
  } //function
}

class info_team extends upload{
  function perform(){ 
    //file upload
    if($_FILES["pic"]["error"] >0 )       //file error
      {
      $this->ret_status="文件上传错误";
      return 0;
    }else {
      //make sql;
      global  $img_path;
      global  $img_url;
      global  $db_table_name;
      $number = $this-> check_input($_POST["number"]);           //number

      $img_numb ='tem'.'_0'.$number;                                   //info_name
      $p_p =$img_url."tem_0".$number.".jpg";             // small img path
      $title = $this->check_input($_POST["title"]);                      //title
      $desc =$this->check_input($_POST["desc"]);                     //desc
      $sql = "update $db_table_name  set  file_name = '$p_p',    
                 title =' $title'
                 where info_name = '$img_numb'"; //sql
 
      // save images;
      $p =$img_path."tem_0".$number.".jpg";             // small img path

     move_uploaded_file($_FILES["pic"]["tmp_name"], $p);
     global $mysql;  
     $r =  $mysql->query($sql);
    if($r==1) 
       $this->ret_status="更新成功";
    else
       $this->ret_status="更新失败";
   }
  } //function
 
}
// us
class info_aboutus extends upload{
  function perform(){ 
    //file upload
    if($_FILES["pic"]["error"] >0 )       //file error
      {
      $this->ret_status="文件上传错误";
      return 0;
    }else {
      //make sql;
      global  $img_path;
      global  $img_url;
      global  $db_table_name;
      $number = $this-> check_input($_POST["number"]);           //number
      $img_numb ='us'.'_0'.$number;                                   //info_name
      $p_p =$img_url."tem_0".$number.".jpg";             // small img path
      $title = $this->check_input($_POST["title"]);                      //title
      $desc =$this->check_input($_POST["desc"]);                     //desc
      $sql = "update $db_table_name set  file_name = '$p_p',    
                 descriptor = '$desc',
                 title =' $title'
                 where info_name = '$img_numb'"; //sql
 
      // save images;
      $p =$img_path."us_0".$number.".jpg";             // small img path
     move_uploaded_file($_FILES["pic"]["tmp_name"], $p);
     global $mysql;  
     $r =  $mysql->query($sql);
    if($r==1) 
       $this->ret_status="更新成功";
    else
       $this->ret_status="更新失败";
   }
  } //function
}
class info_contact extends upload{
  function perform(){ 
   
      global  $db_table_name;
      $img_numb ='contact';                                                    //info_name
      $addr   = $this->check_input($_POST["address"]);      
      $tel      = $this->check_input($_POST["telephone"]);                        //title
      $email  =$this->check_input($_POST["email"]);       
      $website  =$this->check_input($_POST["website"]);                  
      $sql = "update $db_table_name set  file_name = '$addr',    
                 descriptor = '$tel',
                 title =' $email',
                 big_img =' $website' 
                 where info_name = '$img_numb'"; //sql
  
      // save images;
     global $mysql;  
     $r =  $mysql->query($sql);
    if($r==1) 
       $this->ret_status="更新成功";
    else
       $this->ret_status="更新失败";
 
  } //function
 
}
class info_admin extends upload{
  function perform(){ 
      //make sql;
      global  $db_table_name;
      $img_numb ='admin';                                                    //info_name
      $addr   = $this->check_input($_POST["address"]);      
      $tel      = $this->check_input($_POST["telephone"]);                        //title
      $email  = $this->check_input($_POST["email"]);       
      $website  =$this->check_input($_POST["website"]);                  
      $sql = "update $db_table_name  set  file_name = '$addr',    
                 descriptor = '$tel',
                 title =' $email',
                 big_img =' $website' 
                 where info_name = '$img_numb'"; //sql
     
      // save images;
     global $mysql;  
     $r =  $mysql->query($sql);
    if($r==1) 
       $this->ret_status="更新成功";
    else
       $this->ret_status="更新失败";
 
  } //function
 
}
class info_wrapper extends upload{
  function perform(){ 
    echo "wrapper";
      //make sql;
      global  $img_path;
      global  $img_url;
  
      $img_numb ='contact';                                                    //info_name
      $addr   = $this->check_input($_POST["name"]);      
      $tel      = $this->check_input($_POST["wrp"]);                        //title
      $email  =$this->check_input($_POST["tel"]);       
      $website  =$this->check_input($_POST["email"]);                  
      $sql = "insert  into img 
                 ( info_name,file_name,descriptor,title,big_img,w_id,c_id) 
                 values ( 
                  file_name = '$addr',    
                 descriptor = '$tel',
                 title =' $email',
                 big_img =' $website' ,1,1
                 );";
      echo $sql; 
      // save images;
     global $mysql;  
     $r =  $mysql->query($sql);
    if($r==1) 
       $this->ret_status="更新成功";
    else
       $this->ret_status="更新失败";
 
  } //function
 
}








$upload = new upload;
?>
