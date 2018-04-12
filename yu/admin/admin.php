
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <?php include '../App/upload.php' ?>
    <link href="./css/admin.css" rel="stylesheet" />
    <link href="./css/animation.css" rel="stylesheet" />
	<title>后台管理</title>
</head> 
<body >
 <h3>后台管理页面</h3>
   <!-- img -->
   <div id = "IMG">
      <div id ="i1" class="transition" ><a href = "#" >1</a></div>
      <div id ="i2" class="transition" ><a href = "#" >2</a></div>
      <div id ="i3" >3 
    
		     <div id ="s1"class ="border01 transition"><a href = "#" >Home</a></div>
		     <div id ="s2"class ="border01 transition"><a href = "#" >Design</a></div>
             <div id ="s3"class ="border01  transition"><a href = "#" >Model</a></div>
             <div id ="s4"class ="border01 transition"><a href = "#" >Team</a></div>
             <div id ="s5"class ="border01 transition"><a href = "#" >About Us</a></div>
             <div id ="s6"class ="border01 transition"><a href = "#" >Contact</a></div>
    </div>
           <item id ="item1" class =  "border01"> 
                <div id = "b01" class ="border01">大图</div>
                <div id = "b02" class ="border01">标题</div>
                <div id = "b03" class ="border01">说明</div>        
            </item>
        <item id ="item2" class = "border01"> 最多添加12个
                <div id = "b04" class ="border01">图片</div>
                <div id = "b05" class ="border01">标题</div>
                <div id = "b06" class ="border01">说明</div>     
           </item>
          <item id ="item3" class = "border01">最多添加12个   
                <div id = "b07" class ="border01">照片</div>
                <div id = "b08" class ="border01">姓名</div>
                <div id = "b09" class ="border01">职位</div>     
         </item>
         <item id ="item4" class = "border01">
                <div id = "b010" class ="border01">公司简介</div>
                <div id = "b011" class ="border01">职员图片</div>
                <div id = "b012" class ="border01">姓名</div>     
                <div id = "b013" class ="border01">职位</div>   
           </item>
               <item id ="item5" class = "border01">
                <div id = "b014" class ="border01">地址</div>
                <div id = "b015" class ="border01">电话</div>
                <div id = "b016" class ="border01">邮箱</div>     
             </item>      
      <div id ="i4" class="transition" ><a href = "#" >4</a></div>
      <div id ="i5" class="transition" ><a href = "#" >5</a></div>
      <div id ="i6" class="transition" ><a href = "#" >6</a></div>
 
      <div id ="i7" class="transition" ><a href = "#" >7</a></div>
      <div id ="i8" class="transition" ><a href = "#" >8</a></div>
   </div>  
<div id = "ret"> <?php echo $upload->response(); ?> </div>
<div id = "form_boss"> boss</div>
   <form id="form1" action="#" method = "POST" enctype="multipart/form-data">
   Position(位置)：           <input id="status1" class="border03"  type="text" name="position" value="home"></input> 
   Number(编号)：(1~8） <input id="home_img"class="border03"  type="text" name="number"></input> 
   SmallImg(小图)：请确保图片尺寸正确(239*1012)              <input id="file1" min="3" class="border03" type="file" name="small"></input>
   BigImg(大图)：请确保图片尺寸正确(719*1012)                       <input id="file2" class="border03"              type="file" name="big"></input>
   Title(标题)：          <textarea class="border03" type="text" name="title"></textarea>
   Descript(图片说明)：    <textarea class="border03" type="text" name="desc"></textarea>
   <button type ="submit" class ="border03">commit</button> 
 </form>
 <form id="form3"  action="#" method = "POST" enctype="multipart/form-data"> 
   Position(位置)：                  <input id="status1" class="border03"  type="text" name="position" value="model"></input> 
   Number(编号)：(1~12）      <input id="home_img"class="border03"  type="text" name="number"></input> 
   SmallImg(图片)：请确保图片尺寸正确(260*176)        <input id="file1" class="border03" type="file" name="pic"></input>
   Title(标题)：                      <textarea   class="border03" type="text" name="title"></textarea>
   Descript(说明)：                <textarea  class="border03" type="text" name="desc"></textarea>
   <button type ="submit" class ="border03">commit</button> 
 </form> 
 <form id="form4"  action="#" method = "POST" enctype="multipart/form-data">
   Position(位置)：                  <input id="status1" class="border03"  type="text" name="position" value="team"></input> 
   Number(编号)： (1~16）     <input id="home_img"class="border03"  type="text" name="number"></input> 
   Photo(照片)：请确保图片尺寸正确(260*176)        <input id="file1" class="border03" type="file" name="pic"></input>
   Name(名称)：           <textarea  class="border03" type="text" name="title"></textarea>
   Job Position(职位)：<textarea   class="border03" type="text" name="desc"></textarea>
   <button type ="submit" class ="border03">commit</button> 
 </form>
 <form id="form5" action="#" method = "POST" enctype="multipart/form-data"   >
   Position(位置)：       <input id="status1" class="border03"  type="text" name="position" value="aboutus"></input> 
   Number(编号)：(1~12）      <input id="home_img"class="border03"  type="text" name="number"></input> 
   Photo(照片)：请确保图片尺寸正确(260*176)         <input id="file2" class="border03" type="file" name="pic"></input>
   Name(名称)：            <textarea  class="border03" type="text" name="title"></textarea>
   Job Position(职位)：<textarea class="border03" type="text" name="desc"></textarea>
   <button type ="submit" class ="border03">commit</button> 
 </form>
 <form id="form6"  action="#" method = "POST" enctype="multipart/form-data" >
   Position(位置)：       <input id="status1" class="border03"  type="text" name="position" value="Contact"></input> 
   Addresss(地址)：       <textarea id="status1" class="border03"  type="text" name="address"></textarea> 
   Telephone(电话)：           <textarea  class="border03" type="email" name="telephone"></textarea>
   Eail(邮箱)：<textarea  class="border03" type="email" name="email"></textarea>
   Website(网站)：<textarea  class="border03" type="email" name="website"></textarea>
   <button type ="submit" class ="border03">commit</button> 
  </form>
 
</body>
<script src="./js/jquery-1.6.1.min.js"></script>
<script src="./js/admin.js"></script>
<script src="./js/jquery-1.6.1.min.js"></script>
</html>

















 
