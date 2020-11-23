<?php

namespace App\Http\Controllers\Auth;

use App\usuarios;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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

    /*
     Create a new controller instance.
     
     @return void
     
    public function __construct()
    {
        $this->middleware('guest');
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'us_nombre' => 'required|string|max:255',
            'us_apellido' => 'required|string|max:255',
            'us_cedula' => 'required|integer|unique:usuarios',
            'us_correo'=> 'required|string|unique:usuarios',
            'us_user' => 'required|string|unique:usuarios',
            'us_password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\usuarios
     */
    protected function create(array $data)
    {
        return usuarios::create([
            'us_nombre' => $data['us_nombre'],
            'us_apellido' => $data['us_apellido'],
            'us_cedula' => $data['us_cedula'],
            'us_correo' => $data['us_correo'],
            'us_user' => $data['us_user'],
            'us_password' => bcrypt($data['us_password']),
        ]);
    }
}
