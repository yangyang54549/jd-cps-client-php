<?php
namespace Jd\Sdk\Request;

class JdApiGoodsDetail
{
    /**
     * skuId集合
     * @var $skuIds
     */
    private $skuIds;

    /**
     * 查询域集合，不填写则查询全部
     * @var $fields
     */
    private $fields;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.goods.bigfield.query';

    public function setSkuIds($skuIds)
    {
        $this->skuIds = $skuIds;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getApiParams()
    {
        return [
            'goodsReq' => [
                'skuIds' => $this->skuIds,
                'fields'  => $this->fields
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}