<?php

namespace App\Api\V1\Controllers;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt.auth', []);
    }

    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(Auth::guard()->user());
    }

    public function updateUser(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->birthDate = $request->birthDate;
        $user->bankAccountNumber = $request->bankAccountNumber;
        $user->cellphoneNumber = $request->cellphoneNumber;

        if(!$user->save()) {
            throw new HttpException(500);
        }
        else {
            return response()->json([
                'status' => 'User Updated'
            ], 200);
        }


    }

}
