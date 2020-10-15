<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Users\UpdateProfileRequest;
class UsersController extends Controller
{
    public function index(){
        return view('dashboard.users.index')->with('users', User::all());
    }

    public function edit()
    {
        return view("dashboard.users.edit")->with('user', auth()->user());
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'about' => $request->about
        ]);

        session()->flash('success','Profile Updated Successfully');

        return redirect('/users');
    }

    public function makeAdmin(User $user)
    {
        $user->role = 'admin';
        $user->save();

        session()->flash('success', $user->name.' is now has administrator rights');

        return redirect('/users');
    }

}
