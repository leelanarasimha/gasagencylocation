<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        return view('login/index', $this->data);
    }

    public function store(LoginRequest $request)
    {
        $attempt = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);

        if ($attempt) {

            dd($attempt);
        }
    }
}
