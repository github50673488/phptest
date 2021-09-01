<?php
 //header("Content-Type:text/html;charset=utf-8");//---OK json
 //header("Content-Type: application/json;charset=utf-8");//---OK json
//header("Content-Type: application/x-www-form-urlencoded");//download
//header("Content-Type:application/xml;charset=utf-8");//--だめ
 
//header("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8");
//header("Accept: text/html, application/xhtml+xml, image/jxr, */*");
 
 //header("Accept-Language: ja,zh-Hans-CN;q=0.7,zh-Hans;q=0.3");
 //header("Accept-Language: ja,zh-CN;q=0.9,zh;q=0.8,en-US;q=0.7,en;q=0.6");


//header("Host: 153.231.178.24");
//header("User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0");
//header("Accept: text/html");
//header("Accept: text/");
//header("Accept-Language: zh-CN,ja;q=0.9,en;q=0.7,en-US;q=0.6,zh;q=0.4,zh-TW;q=0.3,zh-HK;q=0.1");
//header("Accept-Encoding: gzip, deflate");
//header("Connection: keep-alive");
//header("Upgrade-Insecure-Requests: 1");
//header("Cache-Control: max-age=0");




    
    
date_default_timezone_set('Asia/Tokyo');//
 ini_set("display_errors", "On"); 
 error_reporting(E_ALL | E_STRICT); 
 $url = "http://153.231.178.24/smartcheckin/api/search/1";//
 // echo "<pre>";
 
 // 
 // $a = get_headers($url,true);
 // print_r($a);//输出header响应信息
 
 // 第二种方法：效率较高推荐使用
 $ch = curl_init (); 
//$header = array('Accept:text/xml');
 $header = array('Accept:text/html');
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 
 curl_setopt($ch, CURLOPT_URL, $url); 
 curl_setopt($ch, CURLOPT_TIMEOUT, 200); 
 curl_setopt($ch, CURLOPT_HEADER, false); //不需要输出头部信息
 curl_setopt($ch, CURLOPT_NOBODY, false); //不用输出内容
 #curl_setopt( $ch, CURLOPT_POSTFIELDS, "username=".$username."&password=".$password ); 
//curl_setopt($ch, CURLOPT_PROXY, "124.88.67.40:81");//
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //超时重试
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); //抓取转跳
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); //post方式提交
 $result=curl_exec($ch); 
 $a = curl_getinfo($ch,CURLINFO_HTTP_CODE); //获取url响应
 $b = curl_getinfo($ch,CURLINFO_EFFECTIVE_URL); //获取真实的url
 $c = curl_getinfo($ch,CURLINFO_CONTENT_LENGTH_DOWNLOAD); //获取页面大小 
 curl_close($ch);
 //echo $a."|".($c);
 echo $result;
 
?>