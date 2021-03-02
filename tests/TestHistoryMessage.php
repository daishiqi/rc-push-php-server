<?php
/**
 * 消息模块测试用例
 */
require "./../RongCloud.php";
define("APPKEY", 'sfci50a7sxeai');
define('APPSECRET','GZirxGsWYa');

use RongCloud\RongCloud;
use RongCloud\Lib\Utils;

$RongSDK = new RongCloud(APPKEY,APPSECRET);


function testMessageHistory($RongSDK){
    $Message = $RongSDK->getMessage()->History();
    $params = [
        'date'=> '2020072013',//日期
    ];
    Utils::dump("历史消息获取成功",$Message->get($params));

    Utils::dump("历史消息获取参数错误",$Message->get());

//    $params = [
//        'date'=> '2018030613',//日期
//    ];
//    Utils::dump("历史消息文件删除成功",$Message->remove($params));
//
//    Utils::dump("历史消息文件删除参数错误",$Message->remove());
}

testMessageHistory($RongSDK);


