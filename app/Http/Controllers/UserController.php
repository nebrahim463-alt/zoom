<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    function index()
    {

        $user = User::all();
        return view("user", ["result" => $user]);
    }


    public function show($id)
    {
        $user = user::findOrFail($id);
        return view("user.show", ["result" => $user]);
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route("home")->with("message2", __('language.Deleted Successfully'));
    }


    public function create()
    {
        return view('user.create');
    }




    public function store(Request $request)
    {

        $request->validate([
            'id' => ['required', 'unique:users', 'max:20'],
            'name' => ['required', 'max:255'],
            'email' => ['required', 'unique:users' ,'email' ,'max:255'],
            'password' => ['required', 'min:8'],
        ]);

        User::create([
            "id" => $request->id,
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        return redirect()->route("home")->with("message2", "Created Successfully");
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("user.edit", ["result" => $user]);
    }


    public function update(Request $request)
    {
        $old_id = $request->old_id;
        $user = User::findOrFail($old_id);

        $request->validate([
            'id' => [
                'required',
                Rule::unique('users')->ignore($old_id)
            ],
            'name' => ['required', 'max:255'],
            'email' => ['required', Rule::unique('users')->ignore($user->id) ,'email' ,'max:255'],
            'password' => ['required', 'min:8'],
        ]);


        $user->update([
            "id" => $request->id,
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        return redirect()->route('home')->with("message2", __('language.Updated Successfully')
);
    }
}
