<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function user_roles(string $id)
    {
        $roles = User::find($id)->roles;
        foreach ($roles as $role) {
            echo $role->role_name . "<br>";
        }
    }

    public function role_users()
    {
        $users = Role::find(1)->users;
        foreach ($users as $user) {
            echo $user->name . "<br>";
        }
    }
}
