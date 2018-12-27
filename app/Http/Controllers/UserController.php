<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{




    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware([ 'auth', 'isAdmin']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $users = User::all();

        return view('users.index', compact('users'));

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        return view('users.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        User::create($request->all());

        session()->flash('success', 'Added successful');

        return redirect()->route('users.index');


    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user) {

        return view('users.edit', compact('user'));

    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, User $user) {

        $this->validate($request, [
            'name' => 'string',
            'email' => 'email|unique:users,email,' . $user->id,
        ]);

        if ($request->filled('name')) $user->name = $request->name;

        if ($request->filled('email')) $user->email = $request->email;

        if ($request->filled('password')) $user->password = bcrypt($request->password);

        if ($request->filled('is_admin')) $user->is_admin = $request->is_admin;

        $user->save();

        session()->flash('success', 'Updated successful');

        return redirect()->route('users.index');

    }

}
