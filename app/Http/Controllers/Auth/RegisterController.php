<?php

namespace App\Http\Controllers\Auth;

/*use App\usuarios;*/
use App\Http\Controllers\Controller;
use App\usuarios;
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
    protected $redirectTo = '/home';

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
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|min:6',
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
            'us_nombre' => $data['name'],
            'us_apellido' => $data['lastname'],
            'us_cedula' => $data['cedula'],
            'us_correo' => $data['email'],
            'us_user' => $data['lastname'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
