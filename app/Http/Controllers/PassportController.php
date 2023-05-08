<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class PassportController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required|min:8',

        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);
        $token = $user->createToken('MOHAlARVAEL')->accessToken;
        return response()->json(['token' => $token], 200);
    }
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('MOHAlARVAEL')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'ACCESS REFUSED ERROR!!'], 401);
        }
    }
    public function userInfo()
    {
        $user = auth()->user();
        return response()->json(['user' => $user], 200);
    }
}
