<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php 

	$hh = "";
	var_dump(empty($hh));
	echo ":".$_SERVER['HTTP_USER_AGENT']."<br>";
	echo ":".$_SERVER['HTTP_HOST']."<br>";
	echo "浏览器语言:".$_SERVER['HTTP_ACCEPT_LANGUAGE']."<br><br>";//浏览器语言 
	echo "当前用户IP:".$_SERVER['REMOTE_ADDR']."<br><br>"; //当前用户 IP 。 
	echo "URL:".$_SERVER['REQUEST_URI']."<br><br>"; //URL
	echo "端口:".$_SERVER['REMOTE_PORT']."<br><br>"; //端口。 
	echo "服务器主机的名称:".$_SERVER['SERVER_NAME']."<br><br>"; //服务器主机的名称。 
	echo "正在执行脚本的文件名:".$_SERVER['PHP_SELF']."<br><br>";//正在执行脚本的文件名 
	echo "CGI 规范的版本:".$_SERVER['GATEWAY_INTERFACE']."<br><br>";//CGI 规范的版本。 
	echo "服务器标识的字串:".$_SERVER['SERVER_SOFTWARE']."<br><br>"; //服务器标识的字串 
	echo "请求页面时通信协议的名称和版本:".$_SERVER['SERVER_PROTOCOL']."<br><br>"; //请求页面时通信协议的名称和版本 
	echo "访问页面时的请求方法:".$_SERVER['REQUEST_METHOD']."<br><br>";//访问页面时的请求方法 
	echo "查询(query)的字符串:".$_SERVER['QUERY_STRING']."<br><br>"; //查询(query)的字符串。 
	echo "当前运行脚本所在的文档根目录:".$_SERVER['DOCUMENT_ROOT']."<br><br>"; //当前运行脚本所在的文档根目录 
	echo "当前请求的 Accept: 头部的内容:".$_SERVER['HTTP_ACCEPT']."<br><br>"; //当前请求的 Accept: 头部的内容。 
	echo "当前请求的 Accept-Encoding: 头部的内容:".$_SERVER['HTTP_ACCEPT_ENCODING']."<br><br>"; //当前请求的 Accept-Encoding: 头部的内容 
	echo "当前请求的 Connection: 头部的内容。例如：“Keep-Alive”:".$_SERVER['HTTP_CONNECTION']."<br><br>"; //当前请求的 Connection: 头部的内容。例如：“Keep-Alive”。 
	echo "当前请求的 Host: 头部的内容:".$_SERVER['HTTP_HOST']."<br><br>"; //当前请求的 Host: 头部的内容。 
	echo "当前请求的 User_Agent: 头部的内容:".$_SERVER['HTTP_USER_AGENT']."<br><br>"; //当前请求的 User_Agent: 头部的内容。 
	echo "当前执行脚本的绝对路径名:".$_SERVER['SCRIPT_FILENAME']."<br><br>"; #当前执行脚本的绝对路径名。 
	echo "管理员信息:".$_SERVER['SERVER_ADMIN']."<br><br>"; #管理员信息 
	echo "服务器所使用的端口:".$_SERVER['SERVER_PORT']."<br><br>"; #服务器所使用的端口 
	echo "包含服务器版本和虚拟主机名的字符串:".$_SERVER['SERVER_SIGNATURE']."<br><br>"; #包含服务器版本和虚拟主机名的字符串。 
	echo "包含当前脚本的路径。这在页面需要指向自己时非常有用:".$_SERVER['SCRIPT_NAME']."<br><br>"; #包含当前脚本的路径。这在页面需要指向自己时非常有用。 
	 ?>
</body>
</html>