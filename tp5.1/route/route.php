<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//use think\Route;

//Route::rule('路由表达式','路由地址','请求类型','路由参数(数组)','变量规则(数组)');
//GET,POST,DELETE,PUT,*


Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('arr', 'index/arr');
Route::get('hello/:name', 'index/hello',['https'=>false]);

Route::rule('demo','index/demo');
return [

];
