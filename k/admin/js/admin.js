
var  item_status=1; //当前状态
 window.onload=function(){
  $("#form1"). addClass("form_show") ;
  $("#form1").css("z-index","1");
 }
function home(){
  if(item_status != 1){
    clean();clean2();
    $("#i4"). addClass("img_show");
    $("#i5"). addClass("img_show") ;
    $("#i6"). addClass("img_show") ;
    $("#i1"). addClass("img_show");
    $("#i2"). addClass("img_show") ;
    $("#i7"). addClass("img_show") ;
    $("#i8"). addClass("img_show") ;
    $("#item1").addClass("img_big_hide") ;
    document.getElementById("status1").value="home";
    var  lastid = "#form"+item_status;
 
    $(lastid). addClass("form_hide") ;
    $("#form1"). addClass("form_show") ;
    $(lastid).css("z-index","-2");
    $("#form1").css("z-index","1");
    item_status = 1;
  }else{
    $(lastid).css("z-index","-2");
    $("#form1").css("z-index","1");
   return 
  }
}

function design(){
  clean();clean2();
  $("#i1"). addClass("img_show");
  $("#i2"). addClass("img_show");
  $("#i7"). addClass("img_show");
  $("#i8"). addClass("img_show");
  $("#i4"). addClass("img_hide");
  $("#i5"). addClass("img_hide");
  $("#i6"). addClass("img_hide");
  $("#item1").addClass("img_big_show");
  var  lastid = "#form"+item_status;
  $(lastid). addClass("form_hide") ;
  $("#form1"). addClass("form_show") ;
  $(lastid).css("z-index","-2");
  $("#form1").css("z-index","1");
item_status =2;
document.getElementById("status1").value="design";
}

function model(){
  clean();clean2();
  $("#i4"). addClass("img_hide");
  $("#i5"). addClass("img_hide");
  $("#i6"). addClass("img_hide");
  $("#i1"). addClass("img_show");
  $("#i2"). addClass("img_show");
  $("#i7"). addClass("img_show");
  $("#i8"). addClass("img_show");
  $("#item2").addClass("img_big_show");
  var  lastid = "#form"+item_status;
  $(lastid). addClass("form_hide") ;
  $("#form3"). addClass("form_show") ;
  $(lastid).css("z-index","-2");
  $("#form3").css("z-index","1");
item_status =3;
var t=  document.getElementById("status") ;
      t.value="model";
}
function team(){
  clean();clean2();
  $("#i4"). addClass("img_hide");
  $("#i5"). addClass("img_hide");
  $("#i6"). addClass("img_hide");
  $("#item3").addClass("img_big_show");
  var  lastid = "#form"+item_status;
 
  $(lastid). addClass("form_hide") ;
  $("#form4"). addClass("form_show") ;
  $(lastid).css("z-index","-2");
  $("#form4").css("z-index","1");
item_status = 4;
var t=  document.getElementById("status1") ;
      t.value="team";
}
function us(){
  clean();clean2();
  $("#i4"). addClass("img_hide");
  $("#i5"). addClass("img_hide");
  $("#i6"). addClass("img_hide");
  $("#item4").addClass("img_big_show");
  var  lastid = "#form"+item_status;
 
  $(lastid). addClass("form_hide") ;  
  $("#form5"). addClass("form_show") ;
  $(lastid).css("z-index","-2");
  $("#form5").css("z-index","1");
item_status =5;
var t=  document.getElementById("status1") ;
      t.value="aboutus";
}

function contact(){
  clean();clean2();
  $("#i4"). addClass("img_hide");
  $("#i5"). addClass("img_hide");
  $("#i6"). addClass("img_hide");
  $("#item5").addClass("img_big_show");
  var  lastid = "#form"+item_status;
 
  $(lastid). addClass("form_hide") ;
  $("#form6"). addClass("form_show") ;
  $(lastid).css("z-index","-2");
  $("#form6").css("z-index","1");
item_status =6;
var t=  document.getElementById("status") ;
      t.value="contact";
}
 


//小图被点击
function clean() {
   document.getElementById("i1").className="transition";
   document.getElementById("i2").className="transition";
   document.getElementById("i4").className="transition";
   document.getElementById("i5").className="transition";
   document.getElementById("i6").className="transition";
   document.getElementById("i7").className="transition";
   document.getElementById("i8").className="transition";
   document.getElementById("item1").className="border01";
   document.getElementById("item2").className="border01";
   document.getElementById("item3").className="border01";
   document.getElementById("item4").className="border01";
   document.getElementById("item5").className="border01";

}
function clean2(){
  document.getElementById("form1").className="";
  document.getElementById("form3").className="";
  document.getElementById("form4").className="";
  document.getElementById("form5").className="";
  document.getElementById("form6").className="";
}
 //显示大图
function show_big(ea) {
   clean();
    item_status = -1;
    $("#i4"). addClass("img_hide");
    $("#i5"). addClass("img_hide");
    $("#i6"). addClass("img_hide");
 //document.getElementById("item1").style.display= "block";
    $("#item1").addClass("img_big_show");
    var obj =  this.id;
    set_img_number(obj);

    clean2();
    var  lastid = "#form"+item_status;
    $(lastid). addClass("form_hide") ;
    $("#form1"). addClass("form_show") ;
    $(lastid).css("z-index","-2");
    $("#form1").css("z-index","1");
 
  };
function set_img_number(id){
  var obj =id.replace (/[^0-9]/ig,""); //获取id中的数字
  document.getElementById("home_img").value=obj;
} 
//item
 document.getElementById("s1").onclick=home;
 document.getElementById("s2").onclick=design;
 document.getElementById("s3").onclick=model;
 document.getElementById("s4").onclick=team;
 document.getElementById("s5").onclick=us;
 document.getElementById("s6").onclick=contact; 
 //显示大图
document.getElementById("i1").onclick=show_big;
document.getElementById("i2").onclick=show_big;
document.getElementById("i4").onclick=show_big;
document.getElementById("i5").onclick=show_big;
document.getElementById("i6").onclick=show_big;  
document.getElementById("i7").onclick=show_big;
document.getElementById("i8").onclick=show_big;  



