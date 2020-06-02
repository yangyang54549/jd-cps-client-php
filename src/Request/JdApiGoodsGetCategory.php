<?php
namespace Jd\Sdk\Request;

class JdApiGoodsGetCategory
{
    /**
     * 父类目id(一级父类目为0)
     * @var $parentId
     */
    private $parentId;

    /**
     * 类目级别(类目级别 0，1，2 代表一、二、三级类目)
     * @var $grade
     */
    private $grade;

    /**
     * 接口名称
     * @var $method
     */
    private $method = 'jd.union.open.category.goods.get';

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    public function getApiParams()
    {
        return [
            'req' => [
                'parentId' => $this->parentId,
                'grade' => $this->grade
            ]
        ];
    }

    public function getApiMethodName()
    {
        return $this->method;
    }

}