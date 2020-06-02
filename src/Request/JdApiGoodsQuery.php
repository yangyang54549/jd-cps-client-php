<?php
namespace Jd\Sdk\Request;

class JdApiGoodsQuery
{
    private $pageIndex;

    private $pageSize;

    /**
     * 关键词
     * @var $keyword
     */
    private $keyword;

    /**
     * 商品价格下限
     * @var $pricefrom
     */
    private $pricefrom;

    /**
     * 商品价格上限
     * @var $priceto
     */
    private $priceto;

    /**
     * 佣金比例区间开始
     * @var $commissionShareStart
     */
    private $commissionShareStart;

    /**
     * 佣金比例区间结束
     * @var $commissionShareEnd
     */
    private $commissionShareEnd;

    /**
     * 排序字段(price：单价, commissionShare：佣金比例, commission：佣金， inOrderCount30Days：30天引单量， inOrderComm30Days：30天支出佣金)
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
    private $method = 'jd.union.open.goods.query';


    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    public function setPricefrom($pricefrom)
    {
        $this->pricefrom = $pricefrom;
    }

    public function setPriceto($priceto)
    {
        $this->priceto = $priceto;
    }

    public function setCommissionShareStart($commissionShareStart)
    {
        $this->commissionShareStart = $commissionShareStart;
    }

    public function setCommissionShareEnd($commissionShareEnd)
    {
        $this->commissionShareEnd = $commissionShareEnd;
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
            'goodsReqDTO' => [
                'pageIndex' => $this->pageIndex,
                'pageSize' => $this->pageSize,
                'keyword' => $this->keyword,
                'pricefrom' => $this->pricefrom,
                'priceto' => $this->priceto,
                'commissionShareStart' => $this->commissionShareStart,
                'commissionShareEnd' => $this->commissionShareEnd,
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