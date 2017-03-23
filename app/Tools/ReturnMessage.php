<?php
/**
 * Created by PhpStorm.
 * User: LXT_MAC
 * Date: 17/3/23
 * Time: 下午5:08
 */

namespace App\Tools;


class ReturnMessage
{
    private static $serverNo = 'SN200';
    private static $time;

    /**
     * @return mixed
     */
    public static function getTime()
    {
        return self::$time = time();
    }


    /**
     * @param int $No
     * @param string $message
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public static function error($No=404, $message = 'Not Found')
    {
        return response([
            'ServerNo'   => 'SN'.$No,
            'ServerTime' =>  self::getTime(),
            'message'    =>  $message
        ]);
    }

    /**
     * @param $resultData
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public static function success($resultData)
    {
        return response([
            'ServerNo'    =>  self::$serverNo,
            'ServerTime'  =>  self::getTime(),
            'ResultData'  =>  $resultData
        ]);
    }

}