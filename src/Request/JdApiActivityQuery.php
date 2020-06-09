<?php
namespace Jd\Sdk\Request;

class JdApiActivityQuery
{
    private $pageIndex;

    private $pageSize;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.activity.query';


    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    public function getApiParams()
    {
        return [
            'activityReq' => [
                'pageIndex' => $this->pageIndex,
                'pageSize' => $this->pageSize,
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}