<?php

namespace App\Http\Controllers\Auth;

use App\Interfaces\AuthRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoginRequest;

class LoginController extends Controller
{
    private AuthRepositoryInterface $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function index()
    {
        return view('pages.auth.login');
    }

public function store(StoreLoginRequest $request ){
    $credentials =  $request->validated();

    if($this->authRepository->login($credentials)){
        dd('Login Berhasil');
      }
      return redirect()->route('auth.login')->withErrors([
        'email' => 'Email atau Password anda Salah'
      ]);
    }
}
