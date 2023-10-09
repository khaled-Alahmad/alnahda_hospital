<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::paginate();
        return view('users.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            
            'father' => 'required',
            'mother' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'gender' => 'required',
        ]);

        $user = new User([
            'firstName' => $request->get('firstName'),
            'lastName' => $request->get('lastName'),
            'father' => $request->get('father'),
            'mother' => $request->get('mother'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'gender' => $request->get('gender'),
        ]);

        $user->save();

        return redirect('/users')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'age' => 'required',

            'phone' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required',
            'gender' => 'required',
        ]);
            $user = User::find($id);
            $user->firstName = $request->get('firstName');
            $user->lastName = $request->get('lastName');
            $user->father = $request->get('father');
            $user->mother = $request->get('mother');
            $user->phone = $request->get('phone');
            $user->age = $request->get('age');

            $user->address = $request->get('address');
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->gender = $request->get('gender');
            $user->save();

        return redirect('/users')->with('success', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'User has been deleted');
    }
}
