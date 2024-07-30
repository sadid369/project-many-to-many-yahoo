<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    $role = Role::find(4);
    // return $role->users;
       $roles = Role::get();

       foreach ($roles as $role) {
        echo $role->role_name . "<br>";
        foreach ($role->users as $user) {
           
            echo $user->name . "<br>";
        }
        echo "<hr>";
       }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::find(2);
        $userId= [1,3];

        $role->users()->sync($userId);
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
