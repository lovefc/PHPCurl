<?php
//定义错误报告
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//引用类文件
require('./src/Curl.php');
$ch  = new \lovefc\Curl();
$url = 'https://www.google.com/';
// ip参数为空会进行随机，ua为空也会进行随机
$content = $ch->ua('widowns')->ip()->proxy('127.0.0.1:7890')->url($url)->result('text');// 获取内容
print_r($content);