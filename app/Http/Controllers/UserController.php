<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['users'] = User::paginate(10);
        return view('users/index', $this->data);
    }

    public function add()
    {
        return view('users/add', $this->data);
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
            Session::flash('success_message', 'User Created Successfully');
            return redirect('users');
        }
    }

    public function edit($id)
    {
        $this->data['user'] = User::find($id);
        return view('users/edit', $this->data);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('na̋̊̊̊me');
        $user->email = $request->get('email');
        $user->mobile = $request->get('mobile ');
    }
}
