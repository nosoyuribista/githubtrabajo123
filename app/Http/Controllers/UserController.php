<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Http\Requests\ReCreateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        


        return view('adminusuarios', compact('users'));
        //return view('adminusuarios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name','id');

        return view('users.create', [
            'roles' => $roles

        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Request\ReCreateUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReCreateUserRequest $request)
    {
        $user = User::create($request->all());


        $user->roles()->attach($request->roles);

        return redirect()->route('adminusuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
                return view('users.show', [
            'user' => $user

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $roles = Role::pluck('display_name','id');

        return view('users.edit', [
            'user' => $user,
            'roles' => $roles

        ]);      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {



        $fields=request()->validate([
            'name'=> 'required',
            'identity_document' => 'required',
            'email'=> 'required'
        ]);
        $user->update($fields);

        $user->roles()->sync(request()->roles);

        return redirect()->route('adminusuarios.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $user->roles()->detach(Role::all());
        return redirect()->route('adminusuarios.index');
    }

    public function search()

    {
         $id=request()->get('id');
         //return $id;
        $user = User::find($id);
        return redirect()->route('adminusuarios.show', $user);
    }

       public function myaccount(User $user)
    {
                return view('users.show', [
            'user' => $user

        ]);
    }
}
