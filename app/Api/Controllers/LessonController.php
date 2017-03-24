<?php
/**
 * Created by PhpStorm.
 * User: LXT_MAC
 * Date: 17/3/24
 * Time: 下午2:38
 */

namespace App\Api\Controllers;


use App\Api\Transform\LessonTransform;
use App\Lesson;

class LessonController extends BaseController
{

    public function index()
    {
        $lessons =  Lesson::all();

        return $this->collection($lessons,new LessonTransform());
    }
}