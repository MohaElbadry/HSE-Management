<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    /**
     * This function logs in a user by checking their email and password, creating a token, and
     * returning it as a JSON response.
     * 
     * @param Request request  is an instance of the Request class which contains the data sent
     * by the client in the HTTP request. It is used to retrieve input data, headers, cookies, and
     * other information related to the request. In this specific code, it is used to retrieve the
     * email and password sent by the client for
     * 
     * @return If the email and password provided by the user match with the ones stored in the
     * database, a JSON response containing a token generated by the `createToken` method is returned
     * with a status code of 200. Otherwise, nothing is returned.
     */
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        // Password matches
        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('MOHAlARVAEL')->accessToken;
            return response()->json(['token' => $token], 200);
        }
    }

    /**
     * This function returns the authenticated user's information in JSON format.
     * 
     * @return A JSON response containing the authenticated user's information.
     */
    public function userInfo()
    {
        $user = Auth::user();
        return response()->json(['user' => $user], 200);
    }
}
