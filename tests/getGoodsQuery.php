<?php

/**
 * 示例接口 jd.union.open.goods.query
 */
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Jd\Sdk\Client;
use Jd\Sdk\Request\JdApiGoodsGetCategory;

$appkey = 'd267d2fcbd82456e3571c291ea84d7a4';
$secretkey = '3c67043089ca48f79fd23a11635540b7';

$client = new Client($appkey, $secretkey);
$request = new JdApiGoodsGetCategory();

$request->setParentId(0);
$request->setGrade(1);

try {
    $result = $client->execute($request);
} catch (\Exception $e) {
    die($e->getMessage());
}


var_dump($result);die('ok');