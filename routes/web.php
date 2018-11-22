<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','Web\home@home');










//    **************learn
/*
Route::get('/', function () {
    return view('welcome');
});
// url 参数获取  直接给到处理函数中
Route::any('/k/{id}', 'k_ctr@show' );

Route::any('k', 'k_ctr@show' );

//默认值
Route::any('/s/{id?}', function ($id=10) {
    $url =route('/k/{id}');
     echo  $url;
    echo 'k-test'.$id;
});


//控制器 一层嵌套
// url 名称，‘命名空间’+文件名
Route::any('member','kmember\k_member@show');

//控制器 二层嵌套(文件名和类名需要一致) 带参
Route::any('member2/{id}','kmember\member23\member2@show');

//重定向
Route::redirect('/here', '/k', 301);

Route::any('/kk',function() {
  return 'hello world';
});


// 视图  + 变量
Route::any('/kkk',function() {
  return  view('kview.kview',['name'=>'xingke']);
});
//资源控制器
Route::any('src','kmember\upload');
Route::resources([  
   'jpg' =>'kmember\upload',
   'jpeg'=>'kmember\upload',
   'png' =>'kmember\upload',
 ]);
 

//db
Route::any('/db','kdb\kdb@kdb');
*/