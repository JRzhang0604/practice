<?php
/**
 * Created by PhpStorm.
 * User: LXT_MAC
 * Date: 17/3/23
 * Time: 下午3:47
 */

namespace App\Transform;


// 设置抽象类
/**
 * Class Transform
 * @package App\Transform
 */
abstract class Transform
{
    /**
     * @param $items
     * @return array
     */
    public function transformCollection($items)
    {
        return array_map([$this,'transform'],$items);
    }

    /**
     * @param $item
     * @return mixed
     */
    public abstract function transform($item);
}

