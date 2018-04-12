<?php
include '../App/config.php';
include "$home/App/home.php"; 
include "$home/App/upload.php"; 
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title></title>
    <link href="css/style.css" rel="stylesheet" />
      <script src="js/jquery-1.6.1.min.js"></script>   
    <script src="js/scripts.js"></script>
    <!--[if lt IE 9]>
  	<script src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" media="all">
    <![endif]-->
	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="../../windows.microsoft.com/en-US/internet-explorer/products/ie/home@ocid=ie6_countdown_bannercode"><img src="../../storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
		</div>
	<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

    <div id="glob">
        <div class="spinner"></div>
        <div class="arrowL">
            <a href="#"></a>
        </div>                        
        <div class="arrowR">
            <a href="#" class="nextBtn"></a>
        </div>
        <div id="mainHolder">
            <div id="leftPanel">
                <div>
                    <h1><a href="#!/page_splash" class="logo">Vip Interior</a></h1>
                    <!-- MENU -->
                    <nav class="menu">
                        <ul id="menu">
                            <li class="no_disp"><a href="#!/page_splash"></a><strong></strong></li>
                            <li><a href="#!/page_home"><?php $img->get_path("admin")?></a><strong></strong></li>
                            <li><a href="#!/page_interior_design"><?php $img->get_descript("admin")?></a><strong></strong></li>
                            <li><a href="#!/page_luxury_design"><?php $img->get_title("admin")?></a><strong></strong></li> 
                            <li><a href="#!/page_our_team"><?php $img->get_big("admin")?></a><strong></strong></li>
                            <li class="with_ul"><a href="#!/page_about_us">关于我们</a><strong></strong>
                          <!--      <ul class="submenu_1">
                                    <li><a href="#!/page_more">who we are</a></li>                                
                                    <li><a href="#!/page_more">company</a></li>                                             				    
                                    <li><a href="#!/page_more">awards</a></li>
                   				</ul>  -->
                            </li>
                            <li><a href="#!/page_mail">联系我们</a><strong></strong></li>
                    	</ul>
               	    </nav>
                    <!-- END MENU -->
                    <footer>
                        <ul class="soc_icons">
                            <li><a href="#"><img src="images/soc_icon1.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/soc_icon2.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/soc_icon3.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/soc_icon4.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/soc_icon5.png" alt="" /></a></li>
                        </ul>
                        <div id="botLine"></div>
                    </footer>
                </div>
            </div>
            <!-- CONTENT -->
            <!-- page_home gallery -->
            <div class="splash">
                <p id="hint">click to view details</p>
                <div>
            		<ul>
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_01")?>"alt="" /></a></li>		
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_02")?>"alt="" /></a></li>		
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_03")?>"alt="" /></a></li>		
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_04")?>"alt="" /></a></li>		
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_05")?>"alt="" /></a></li>		
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_06")?>"alt="" /></a></li>		
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_07")?>"alt="" /></a></li>		
            			<li><a href="#!/page_home"><img src="<?php $img->get_path("home_08")?>"alt="" /></a></li>		
                    </ul>
            	</div>
            </div>
            <!-- end page_home gallery -->
            <!-- page_interior_design gallery -->
            <div class="splash">
                <div>
            		<ul>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_01")?>"alt="" /></a></li>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_02")?>"alt="" /></a></li>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_03")?>"alt="" /></a></li>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_04")?>"alt="" /></a></li>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_05")?>"alt="" /></a></li>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_06")?>"alt="" /></a></li>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_07")?>"alt="" /></a></li>
            			<li><a href="#!/page_interior_design"><img src="<?php $img->get_path("design_08")?>"alt="" /></a></li>
                    </ul>
            	</div>
            </div>
            <!-- end page_interior_design gallery -->
            <section id="content">
                <ul>           
                    <li id="page_splash" class="no_disp"></li>
                    <li id="page_home">
                        <div class="col1 pad3">
                            <div class="wrapper">
                                <ul class="list3">
                                    <li>
                                        <img src="<?php $img->get_big("home_01")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3> <?php $img->get_title("home_01")?></h3>
                                            
                                                <p><?php $img->get_descript("home_01")?> <a href="<?php $img->get_big("home_01")?>" class="readMore2">read more&gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("home_02")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3> <?php $img->get_title("home_02")?></h3>
                                               
                                                <p>  <?php $img->get_descript("home_02")?><a href=" <?php $img->get_big("home_02")?>" class="readMore2">" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("home_03")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3> <?php $img->get_title("home_03")?>    </h3>
                                                <p class="ws"><span class="color2">$920,000</span>   -  <span class="color2">3</span> beds  |  <span class="color2">2</span> bath  |  <span class="color2">2</span> parking places</p>
                                                <p> <?php $img->get_descript("home_03")?>     <a href="<?php $img->get_big("home_03")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("home_04")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("home_04")?> </h3>
                                               
                                                <p> <?php $img->get_descript("home_04")?><a href="<?php $img->get_big("home_04")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("home_05")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("home_05")?></h3>
                                             
                                                <p> <?php $img->get_descript("home_05")?>  <a href="<?php $img->get_big("home_05")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("home_06")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("home_06")?></h3>
                                              
                                                <p> <?php $img->get_descript("home_06")?> <a href="<?php $img->get_big("home_06")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("home_07")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("home_07")?></h3>
                                               
                                                <p> <?php $img->get_descript("home_07")?> <a href="<?php $img->get_big("home_07")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("home_08")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("home_08")?></h3>
                                               
                                                <p> <?php $img->get_descript("home_07")?><a href="<?php $img->get_big("home_08")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li id="page_interior_design">
                        <div class="col1 pad3">
                            <div class="wrapper">
                                <ul class="list3">
                                    <li>
                                        <img src="<?php $img->get_big("design_01")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_01")?></h3>
                                            
                                                <p> <?php $img->get_descript("design_01")?> <a href="<?php $img->get_big("design_01")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("design_02")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_02")?></h3>
                                                
                                                <p><?php $img->get_descript("design_02")?><a href="<?php $img->get_big("design_02")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("design_03")?>"alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_03")?></h3>
                                                
                                                <p><?php $img->get_descript("design_03")?><a href="<?php $img->get_big("design_03")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("design_04")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_04")?></h3>
                                                
                                                <p> <?php $img->get_descript("design_04")?><a href="<?php $img->get_big("design_04")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("design_05")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_05")?></h3>
                                                
                                                <p> <?php $img->get_descript("design_05")?> <a href="<?php $img->get_big("design_05")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("design_06")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_06")?></h3>
                                               
                                                <p>  <?php $img->get_descript("design_06")?><a href="<?php $img->get_big("design_06")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("design_07")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_07")?></h3>
                                                
                                                <p><?php $img->get_descript("design_07")?> <a href="<?php $img->get_big("design_07")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="<?php $img->get_big("design_08")?>" alt="" />
                                        <div>
                                            <div class="inblock pad4">
                                                <a href="#!/page_splash" class="closeBtn"><span></span></a>
                                                <h3><?php $img->get_title("design_08")?></h3>
                                                
                                                <p><?php $img->get_descript("design_08")?> <a href="<?php $img->get_big("design_08")?>" class="readMore2">read more &gt;&gt;</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li id="page_luxury_design">
                        <div class="container_12">
                            <div class="grid_7 prefix_4 suffix_1">
                                <div class="wrapper pad1">
                                    <h2>样板间</h2>
                                    <div class="scrollBtns">
                                        <a href="#" class="scrollUp"></a>
                                        <a href="#" class="scrollDown"></a>
                                    </div>
                                    <div class="scroll">
                                        <ul class="list1">
                                            <li>       <!--样板间(可扩展）-->
                                                <img src="<?php $img->get_path("model_01")?>" alt="" />
                                                <h3>01<?php $img->get_title("model_01")?><br>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_01")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_01")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_02")?>" alt="" />
                                                <h3>02<?php $img->get_title ("model_02")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_02")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_02")?></p>
                                            </li>
                                            <li>
                                               <img src="<?php $img->get_path("model_03")?>" alt="" />
                                                <h3>03<?php $img->get_title ("model_03")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_03")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_03")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_04")?>" alt="" />
                                                <h3>04<?php $img->get_title ("model_04")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_04")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_04")?></p>
                                            </li>
                                            <li>
                                               <img src="<?php $img->get_path("model_05")?>" alt="" />
                                                <h3>05<?php $img->get_title ("model_05")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_05")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_05")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_06")?>" alt="" />
                                                <h3>06<?php $img->get_title ("model_06")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_06")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_06")?></p>
                                            </li>       
                                            <li>
                                               <img src="<?php $img->get_path("model_07")?>" alt="" />
                                                <h3>07<?php $img->get_title ("model_07")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_07")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_07")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_08")?>" alt="" />
                                                <h3>08<?php $img->get_title ("model_08")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_08")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_08")?></p>
                                            </li>    
                                            <li>
                                               <img src="<?php $img->get_path("model_09")?>" alt="" />
                                                <h3>09<?php $img->get_title ("model_09")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_09")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_09")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_010")?>" alt="" />
                                                <h3>10<?php $img->get_title ("model_10")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_010")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_10")?></p>
                                            </li>    
                                            <li>
                                               <img src="<?php $img->get_path("model_011")?>" alt="" />
                                                <h3>11<?php $img->get_title ("model_11")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_011")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_11")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_012")?>" alt="" />
                                                <h3>12<?php $img->get_title ("model_12")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_012")?>">more&gt;&gt;</a></h3>
                                                <p><?php $img->get_descript("model_12")?></p>
                                            </li>    
                                            <li>
                                               <img src="<?php $img->get_path("model_013")?>" alt="" />
                                                <h3>13<?php $img->get_title ("model_13")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_013")?>">more&gt;&gt;</a></h3> 
                                                <p><?php $img->get_descript("model_13")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_014")?>" alt="" />
                                                <h3>14<?php $img->get_title ("model_14")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_014")?>">more&gt;&gt;</a></h3> 
                                                <p><?php $img->get_descript("model_14")?></p>
                                            </li>    
                                            <li>
                                               <img src="<?php $img->get_path("model_015")?>" alt="" />
                                                <h3>15<?php $img->get_title ("model_15")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_015")?>">more&gt;&gt;</a></h3> 
                                                <p><?php $img->get_descript("model_15")?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("model_016")?>" alt="" />
                                                <h3>16<?php $img->get_title ("model_16")?></h3>
                                                <a  class="readMore2" href= "<?php $img->get_path("model_016")?>">more&gt;&gt;</a></h3> 
                                                <p><?php $img->get_descript("model_16")?></p>
                                            </li>    
                                        </ul>
                                        <p class="nopad"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="page_our_team">
                        <div class="container_12">
                            <div class="grid_8 prefix_4">
                                <div class="wrapper pad1">
                                    <h2>明星团队</h2>
                                    <div class="scrollBtns">
                                        <a href="#" class="scrollUp"></a>
                                        <a href="#" class="scrollDown"></a>
                                    </div>
                                    <div class="scroll v2 mar2">
                                        <ul class="list2"> <!-- 团队可扩展 -->
                                            <li> 
                                                <img src="<?php $img->get_path("tem_01") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_01") ?></h3>
                                                <p><?php $img->get_descript("tem_01") ?></p>
                                            </li>
                                            <li  >
                                                <img src="<?php $img->get_path("tem_02") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_02") ?></h3>
                                                <p><?php $img->get_descript("tem_02") ?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("tem_03") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_03") ?></h3>
                                                <p><?php $img->get_descript("tem_03") ?></p>
                                            </li>
                                            <li  >
                                                <img src="<?php $img->get_path("tem_04") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_04") ?></h3>
                                                <p><?php $img->get_descript("tem_04") ?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("tem_05") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_05") ?></h3>
                                                <p><?php $img->get_descript("tem_05") ?></p>
                                            </li>
                                            <li  >
                                                <img src="<?php $img->get_path("tem_06") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_06") ?></h3>
                                                <p><?php $img->get_descript("tem_06") ?></p>
                                            </li>
                                            <li>
                                                <img src="<?php $img->get_path("tem_07") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_07") ?></h3>
                                                <p><?php $img->get_descript("tem_07") ?></p>
                                            </li>
                                            <li >
                                                <img src="<?php $img->get_path("tem_08") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_08") ?></h3>
                                                <p><?php $img->get_descript("tem_08") ?></p>
                                            </li>
                                            <li  >
                                                <img src="<?php $img->get_path("tem_09") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_09") ?></h3>
                                                <p><?php $img->get_descript("tem_09") ?></p>
                                            </li>
                                            <li  >
                                                <img src="<?php $img->get_path("tem_010") ?>" alt="" />
                                                <h3><?php $img->get_title("tem_010") ?></h3>
                                               <p><?php $img->get_descript("tem_010") ?></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_7 prefix_4 suffix_1">
                                <div class="wrapper">
                                    <div class="hr"></div>
                                    <h2>标题2</h2>
                                    <img src="<?php $img->get_path("tem_011") ?>" class="fleft mar1 shadow1" alt="" />
                                       <p>
                                            <?php $img->get_descript("tem_011") ?>
                                       </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="page_about_us">
                        <div class="container_12">
                            <div class="grid_7 prefix_4 suffix_1">
                                <div class="wrapper pad1">
                                    <h2>Welcome!</h2>
                                    <div class="scrollBtns">
                                        <a href="#" class="scrollUp"></a>
                                        <a href="#" class="scrollDown"></a>
                                    </div>
                                    <div class="scroll v2">
                                        <p class="color2"> <?php $img->get_descript("us_011") ?> </p>
                                        <p> <?php $img->get_descript("us_021") ?>                </p>
                                        <p class="pad5"> <?php $img->get_descript("us_021") ?>   </p>
                                    </div>
                                    <div class="hr"></div>
                                    <h2>我们的团队</h2>
                                    <p><?php $img->get_descript("us_031") ?> </p>
                                </div>
                            </div>
                            <div class="grid_8 prefix_4">
                                <div class="wrapper">
                                    <ul class="list2">
                                        <li>
                                            <img src="<?php $img->get_path("us_01") ?>" alt="" />
                                            <h3><?php $img->get_title("us_01") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_01") ?></a></p>
                                        </li>
                                        <li   >
                                            <img src="<?php $img->get_path("us_02") ?>" alt="" />
                                            <h3><?php $img->get_title("us_02") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_02") ?></a></p>
                                        </li>
                                        <li>
                                        <li>
                                            <img src="<?php $img->get_path("us_03") ?>" alt="" />
                                            <h3><?php $img->get_title("us_03") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_03") ?></a></p>
                                        </li>
                                        <li  >
                                            <img src="<?php $img->get_path("us_04") ?>" alt="" />
                                            <h3><?php $img->get_title("us_04") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_04") ?></a></p>
                                        </li>
                                            <img src="<?php $img->get_path("us_05") ?>" alt="" />
                                            <h3><?php $img->get_title("us_05") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_05") ?></a></p>
                                        </li>
                                        <li  >
                                            <img src="<?php $img->get_path("us_06") ?>" alt="" />
                                            <h3><?php $img->get_title("us_06") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_06") ?></a></p>
                                        </li>
                                        </li>
                                            <img src="<?php $img->get_path("us_07") ?>" alt="" />
                                            <h3><?php $img->get_title("us_07") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_07") ?></a></p>
                                        </li>
                                        <li  >
                                            <img src="<?php $img->get_path("us_08") ?>" alt="" />
                                            <h3><?php $img->get_title("us_08") ?></h3>
                                            <p><a href="#" class="color1"><?php $img->get_descript("us_08") ?></a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="page_mail">
                        <div class="container_12">
                            <div class="grid_8 prefix_4">
                                <div class="wrapper pad1">
                                    <h2>请联系我们</h2>
                                 <!--  <figure class="google_map"></figure> 地图以后再完善-->
                                    <div>
                                         我们的地址: 
                                        <p><span class="color2"> <?php $img->get_path("contact")?> <br /> </span><br />
    <span class="w1">Mobile:</span> <?php $img->get_title("contact")?> <br /> 
    <span class="w2">FAX:</span><?php $img->get_descript("fax")?><br />E-mail: <a href="#" class="color2 und"><?php $img->get_big("contact")?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid_7 suffix_1 prefix_4">
                                <div class="wrapper">
                                    <div class="hr"></div>
                                </div>
                            </div>
                            <div class="grid_8 prefix_4">
                                <div class="wrapper">
                                    <h2>请留下您的联系方式</h2>
                                    <form id="form1"   action="#" method = "POST"  />
                                      <input type="hedden"  name= "position" value="wrapper">
                                      <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong>
                                      </div>
                                      <fieldset>
                                        <div class="w3">
                                    		<label class="name">
                                              <span>您的姓名:</span>
                                    		  <input type="text"  name="name" value="" />
                                    		  <span class="error">*This is not a valid name.</span> <span class="empty">*并不是有效的名称.</span> </label><br />
                                            <label class="email">
                                              <span>您的邮箱地址:</span>
                                    		  <input type="email"   name="email"      value="" />
                                    		  <span class="error">*This is not a valid email address.</span> <span class="empty">*并不是有效的电子邮箱地址.</span> </label><br />
                                            <label class="phone">
                                              <span>您的电话号码:</span>
                                              <input type="tel"        name="tel"            value="" />
                                    		  <span class="error">*This is not a valid phone number.</span> <span class="empty">*您输入的号码有误.</span> </label>
                                        </div>
                                        <div class="w3">
                                    		<label class="message">
                                              <span>输入您的留言</span>
                                    		  <textarea  name="wrp"   ></textarea>
                                              <span class="error">*The message is too short.</span> <span class="empty">*消息长度太短了.</span> </label>
                                    	<br class="clear" />
                                    	<div class="btns"><p><a href="#" class="readMore" data-type="reset">清除</a><a href="#" class="readMore" type="submit">发送</a></p></div>
                                        </div>
                                      </fieldset>
                                    </form>
                                </div>   
                            </div>   
                        </div>   
                    </li>
                    <li id="page_privacy">
                        <div class="container_12">
                            <div class="grid_7 prefix_4 suffix_1">
                                <div class="wrapper pad1">
                                    <p><a href="#" class="color2 und">privacy@demolink.org</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="page_more">
                        <div class="container_12">
                            <div class="grid_7 prefix_4 suffix_1">
                                <div class="wrapper pad1">
                                    <h2>Lorem ipsum</h2>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <!-- FOOTER -->
            <footer>
                <div class="container_12">
                    <div class="grid_9 prefix_3">       
                        <!-- {%FOOTER_LINK} -->
                    </div>       
                </div>       
            </footer>
            <!-- END FOOTER -->
        </div>
        <!-- END CONTENT -->
    </div>


</body>
</html>
