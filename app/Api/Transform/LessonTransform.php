<?php
/**
 * Created by PhpStorm.
 * User: LXT_MAC
 * Date: 17/3/24
 * Time: 下午2:47
 */

namespace App\Api\Transform;

use App\Lesson;
use League\Fractal\TransformerAbstract;

// 继承dingo自带的TransForm
class LessonTransform extends TransformerAbstract
{

    public function transform(Lesson $lesson)
    {
        return [
            'title' => $lesson['title'],
            'content' => $lesson['body'],
            'free' => (boolean) $lesson['free']
        ];
    }
}