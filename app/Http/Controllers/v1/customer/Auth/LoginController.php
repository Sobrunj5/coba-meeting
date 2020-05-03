<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('customer')->attempt($credential)){
            $user = Auth::guard('customer')->user();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil login',
                'data' => $user,
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => 'masukkan username dan password yang benar',
            'data' => (object) []
        ], 401);

    }


}
