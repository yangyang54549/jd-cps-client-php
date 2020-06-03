<?php

/**
 * 示例接口 jd.union.open.goods.query
 */
require_once dirname(__FILE__)."/../vendor/autoload.php";

use Jd\Sdk\Client;
use Jd\Sdk\Request\JdApiGoodsGetCategory;

$appkey = '';
$secretkey = '';

$client = new Client($appkey, $secretkey);
$request = new JdApiGoodsGetCategory();

$request->setParentId(0);
$request->setGrade(0);

try {
    $result = $client->execute($request);
} catch (\Exception $e) {
    die($e->getMessage());
}


var_dump($result);die('ok');