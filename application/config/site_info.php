<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$active_group = 'default';
$active_record = TRUE;

$config['site_name'] = '33号铺';

//toabaoke_pid请去alimama.com申请
//taobake_pid 是mm_30103010_0_0中的 30103010 这一段，【非常重要】！！
$config['taobaoke_pid'] = '30103010';

//本app_id和app_secret仅做测试用途
//请去淘宝开放平台申请自己的应用key和secret
//http://open.taobao.com/index.htm
$config['appkey'] = '12673864';
$config['secretkey'] = 'd4cb57d3eec5d6f1cbbfd0f430caf282';

//如果你处于防火墙之中，需要配置HTTP代理，请配置你的HTTP代理服务器地址和IP
//否则，请留空
//举例：腾讯公司内部的代理服务器如下：
//$config['http_proxy'] = 'http://proxy.tencent.com:8080';
$config['http_proxy'] = '';