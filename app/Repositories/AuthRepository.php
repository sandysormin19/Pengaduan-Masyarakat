<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $credentials)
    {
        // Melakukan autentikasi user
        return Auth::attempt($credentials);
    }
    public function logout()
    {
        // Melakukan logout user
       return Auth::logout();
    }
}
