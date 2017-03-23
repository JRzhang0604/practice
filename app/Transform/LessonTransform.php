<?php
/**
 * Created by PhpStorm.
 * User: LXT_MAC
 * Date: 17/3/23
 * Time: 下午3:53
 */

namespace App\Transform;


/**
 * Class LessonTransform
 * @package App\Transform
 */
class LessonTransform extends Transform
{
    /**
     * @param $lesson
     * @return array
     */
    public function transform($lesson)
    {

        return [
            'title' => $lesson['title'],
            'content' => $lesson['body'],
            'free' => (boolean) $lesson['free']
        ];
    }
}