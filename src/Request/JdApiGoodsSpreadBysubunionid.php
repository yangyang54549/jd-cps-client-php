<?php
namespace Jd\Sdk\Request;

class JdApiGoodsSpreadBysubunionid
{
    /**
     * 推广物料链接
     * @var $materialId
     */
    private $materialId;

    /**
     * 子联盟ID
     * @var $subUnionId
     */
    private $subUnionId;

    /**
     * 优惠券领取链接
     * @var $couponUrl
     */
    private $couponUrl;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.promotion.bysubunionid.get';

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
            'promotionCodeReq' => [
                'materialId' => $this->materialId,
                'subUnionId'  => $this->subUnionId,
                'couponUrl'  => $this->couponUrl,
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}