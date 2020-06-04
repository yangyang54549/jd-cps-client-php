<?php
namespace Jd\Sdk\Request;

class JdApiOrderQuery
{
    private $pageNo;

    private $pageSize;

    private $type;

    private $time;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.order.query';


    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getApiParams()
    {
        return [
            'goodsReqDTO' => [
                'pageNo' => $this->pageNo,
                'pageSize' => $this->pageSize,
                'type' => $this->type,
                'time' => $this->time
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}