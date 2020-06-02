<?php
namespace Jd\Sdk\Request;

class JdApiGoodsSpread
{
    /**
     * 推广物料链接
     * @var $materialId
     */
    private $materialId;

    /**
     * 站点ID
     * @var $siteId
     */
    private $siteId;

    /**
     * 优惠券领取链接
     * @var $couponUrl
     */
    private $couponUrl;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.promotion.common.get';

    public function setMaterialId($materialId)
    {
        $this->materialId = $materialId;
    }

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
    }

    public function setCouponUrl($couponUrl)
    {
        $this->couponUrl = $couponUrl;
    }

    public function getApiParams()
    {
        return [
            'goodsReq' => [
                'materialId' => $this->materialId,
                'siteId'  => $this->siteId,
                'couponUrl'  => $this->couponUrl
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}