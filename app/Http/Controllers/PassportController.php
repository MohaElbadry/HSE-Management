<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

        $token = $user->createToken('MOHAlARVAEL')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    public function login(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        $user = User::where('email', $request->email)->first();
        // return response()->json(['token' => $user], 200);
        if ($user && $user->password === $request->password) {
            // Password matches

            $token = $user->createToken('MOHAlARVAEL')->accessToken;
            return response()->json(['token' => $token], 200);
        }
    }

    public function userInfo()
    {
        $user = Auth::user();
        return response()->json(['user' => $user], 200);
    }
}
