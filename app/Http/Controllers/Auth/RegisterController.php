<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    /* The `protected  = '/login';` property is setting the URL that the user will be redirected
to after they have successfully registered. In this case, the user will be redirected to the login
page. */
    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required']
        ]);
    }

    /**
     * The function creates a new user with the given data and hashed password.
     * 
     * @param array data  is an array that contains the user's information such as name, email,
     * role, and password. This function is used to create a new user in the database by passing the
     * user's information to the User model's create method. The password is hashed using Laravel's
     * Hash::make method before being
     * 
     * @return The `create()` method is returning a new `User` instance that is created with the
     * provided `` array. The `` array contains the user's name, email, role, and password.
     * The password is hashed using the `Hash::make()` method before being stored in the database.
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * This function registers a new user and redirects them to a specified page.
     * 
     * @param Request request  is an instance of the Request class which contains the data sent
     * by the user through an HTTP request. It includes information such as the HTTP method, headers,
     * and any data submitted in the request body. In this case, it is used to retrieve the data
     * submitted by the user during registration.
     * 
     * @return a redirect to the URL specified in the `` property of the class.
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        return redirect($this->redirectTo);
    }
}
