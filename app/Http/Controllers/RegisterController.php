<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('register/index', $this->data);
    }

    public function store(RegisterRequest $request)
    {
        dd($request->all());
    }
}
