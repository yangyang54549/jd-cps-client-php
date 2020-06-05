<?php
namespace Jd\Sdk\Request;

class JdApiOrderRowQuery
{
    private $pageIndex;

    private $pageSize;

    private $type;

    private $startTime;

    private $endTime;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.order.row.query';


    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getApiParams()
    {
        return [
            'orderReq' => [
                'pageIndex' => $this->pageIndex,
                'pageSize' => $this->pageSize,
                'type' => $this->type,
                'startTime' => $this->startTime,
                'endTime' => $this->endTime
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}