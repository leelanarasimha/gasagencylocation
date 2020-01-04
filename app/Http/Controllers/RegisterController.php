<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $postData = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => bcrypt($request->input('password'))
        );

        if (User::create($postData)) {
            Session::flash('success_message', 'User Created SUccessfully');
            return redirect('login');
        }
    }
}
