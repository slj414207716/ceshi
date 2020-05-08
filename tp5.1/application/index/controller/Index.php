<?php
namespace app\index\controller;
use think\Request;
use think\Db;
class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
	
	public function demo()
	{
		
		// $url = "www.baidu.com";
		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_NOBODY, true);
		// curl_setopt($ch, CURLOPT_HEADERFUNCTION, function ($ch, $str) use(&$setcookie) {
			
		//   // 第一个参数是curl资源，第二个参数是每一行独立的header!
		//   list ($name, $value) = array_map('trim', explode(':', $str, 2));
		//   $name = strtolower($name);
		//   if('set-cookie'==$name)
		//   {
		// 	$setcookie[]=$value;
		//   }
		//   return strlen($str);
		  
		// });
		
		// curl_exec($ch);
		// curl_close($ch);
		// $cookie = array();
		// foreach($setcookie as $c)
		// {
		//   $tmp = explode(";",$c);
		//   $cookie[] = $tmp[0];
		// }
		// $cookiestr = "Cookie:".implode(";", $cookie);
		//echo $cookiestr;
		echo 111;
		
	}
	
    public function arr()
    {
    	$array = array('a' => 1, 'b' => 2);

    	return json_encode($array);
    }
	
}
