<?php
namespace Jd\Sdk\Request;

/**
 * 京粉精选商品查询接口
 * Class JdApiGoodsJingFenQuery
 * @package Jd\Sdk\Request
 */
class JdApiGoodsJingFenQuery
{
    private $pageIndex;

    private $pageSize;

    /**
     * 频道id：
     * 1-好券商品,2-超级大卖场,10-9.9专区,22-热销爆品,23-为你推荐,24-数码家电,25-超市,26-母婴玩具,27-家具日用,28-美妆穿搭,29-医药保健,30-图书文具,31-今日必推,32-品牌好货,33-秒杀商品,34-拼购商品,40-高收益,41-自营热卖榜,109-新品首发,110-自营,125-首购商品,129-高佣榜单,130-视频商品
     * @var $eliteId
     */
    private $eliteId;

    /**
     * 排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30DaysSku：sku维度30天引单量，comments：评论数，goodComments：好评数)
     * @var $sortName
     */
    private $sortName;

    /**
     * asc,desc升降序,默认降序
     * @var $sort
     */
    private $sort;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.goods.jingfen.query';


    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function setEliteId($eliteId)
    {
        $this->eliteId = $eliteId;
    }

    public function setSortName($sortName)
    {
        $this->sortName = $sortName;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    public function getApiParams()
    {
        return [
            'goodsReq' => [
                'pageIndex' => $this->pageIndex,
                'pageSize' => $this->pageSize,
                'eliteId' => $this->eliteId,
                'sortName' => $this->sortName,
                'sort'  => $this->sort
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}