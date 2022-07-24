<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login() {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function recovery()
    {
        return view('auth.recovery');
    }

    public function registerUser()
    {

    }
}
