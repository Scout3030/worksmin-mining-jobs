<?php

namespace App\Http\Controllers\Auth;

use App\Candidate;
use App\Company;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'role_id' => ['max:1'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($data['role_id'] == Role::COMPANY) {

            return User::create([
                'role_id' => Role::COMPANY,
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'picture' => "default_user.jpg",
            ]);
        }else{
            // dd($data);
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'picture' => "default_user.jpg",
            ]);
        }
    }


    protected function registered( Request $request, $user )
    {
        if ($user->role_id == Role::COMPANY) {
            Company::create([
                'user_id' => $user->id,
                'title' => $user->name,
                'slug' => str_slug($user->name.'-'.strtotime(new \Carbon\Carbon()), '-')
            ]);
        }else{
            Candidate::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'slug' => str_slug($user->name.'-'.strtotime(new \Carbon\Carbon()), '-')
            ]);
        }
        return redirect('/');
    }
}
