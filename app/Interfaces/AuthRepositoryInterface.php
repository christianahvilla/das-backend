<?php

namespace App\Interfaces;

use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\Request;

interface AuthRepositoryInterface
{
    public function login(StoreLoginRequest $login);

    public function logout(Request $request);
}
