<?php
/**
 * Created by PhpStorm.
 * User: LXT_MAC
 * Date: 17/3/24
 * Time: 下午2:36
 */

namespace App\Api\Controllers;


use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;


class BaseController extends Controller
{
    // 别的控制器 继承base 这样在每一个控制器都可以使用dingo
    use Helpers;
}