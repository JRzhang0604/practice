<?php
/**
 * Created by PhpStorm.
 * User: LXT_MAC
 * Date: 17/3/24
 * Time: 下午3:03
 */

namespace App\Api\Controllers;

// https://github.com/tymondesigns/jwt-auth/wiki/Creating-Tokens  博客地址
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Requests\Request;


class AuthController extends BaseController
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticate(Request $request)
    {

        // grab credentials from the request
        $credentials = $request->only('email', 'password');
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    public function register(Request $request)
    {
        $newUser = [
            'email' => $request['email'],
            'name'  => $request['name'],
            'password' => $request['password']
        ];
        $user = User::create($newUser);
        $token = JWTAuth::formUser($user);
        return response()->json(compact('token'));
    }
}