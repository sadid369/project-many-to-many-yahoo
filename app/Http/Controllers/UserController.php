<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::find(4);
        // return $user->roles;
        // $user = User::find(4);
        // foreach ($user->roles as $value) {
        //     echo $value->role_name . "<br>";
        // }
        $users = User::get();
        foreach ($users as  $user) {

            echo $user->name . "<br>";
            echo $user->email . "<br>";
            foreach ($user->roles as $role) {
                echo $role->role_name . " / ";
            }
            echo "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(3);
        // $roles =[1,3];
        // $user->roles()->attach($roles);

        $user->roles()->detach(3);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
