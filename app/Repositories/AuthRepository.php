<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface; // ✅ Import interface
use Illuminate\Support\Facades\Auth;        // ✅ Import facade Auth

class AuthRepository implements AuthRepositoryInterface
{
    public function login(array $credentials)
    {
        // Melakukan autentikasi user
        return Auth::attempt($credentials); // ✅ Gunakan facade Auth
    }
}
