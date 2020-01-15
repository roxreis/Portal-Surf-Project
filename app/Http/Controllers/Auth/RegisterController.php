<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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

     // como colocar corretamente o direcionamento para o view com o formulario de cadastro sem perder as informacoes colocadas aqui?
     public function viewUsuarioCadastro(Request $request){
        return view('register');
        $this->middleware('guest');
     }

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     // validacao do cadastro ainda no formulario
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'person' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cpf' => ['required', 'integer', 'unique:users'],
            'gender' => ['required'],
            'state' => ['required', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:255'],
            'phone1' => ['required', 'integer', 'max:12'],
            'phone2' => ['integer', 'max:12'],
            'programaCarona' => ['required'],
            'terms' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

     // criacao do cadastro do usuario
    protected function create(array $data)
    {
        return User::create([
            'person' => $data['person'],
            'name' => $data['name'],
            'nameLogin' => $data['nameLogin'],
            'password' => Hash::make($data['password']),
            'cpf' => $data['cpf'],
            'gender' => $data['gender'],
            'state' => $data['state'],
            'city' => $data['city'],
            'email' => $data['email'],
            'phone1' => $data['phone1'],
            'phone2' => $data['phone2'],
            'programaCarona' => $data['programaCarona'],
            'terms' => $data['terms'],
            'emailNotification' => $data['emailNotification'],
        ]);
    }
}
