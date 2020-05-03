<?php

namespace App\Http\Controllers\adminmitra\Auth;

use App\Http\Controllers\Controller;
use App\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivationController extends Controller
{
    public  function activate(Request $request)
    {
        $user = Mitra::where('email', $request->email)->where('activation_token',$request->token)->firstOrFail();
        $user->status = true;
        $user->activation_token = null;
        $user->update();

        Auth::guard('adminmitra')->loginUsingId($user->id);
        return redirect()->route('dashboard.index');
    }
}
