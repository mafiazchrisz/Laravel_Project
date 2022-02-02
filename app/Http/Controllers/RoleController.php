<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    //
    public function addRole()
    {
        $roles = [
            ["name" => "Administrator"],
            ["name" => "Editor"],
            ["name" => "Author"],
            ["name" => "Contributor"],
            ["name" => "Subscribers"],
        ];
        Role::insert($roles);
        return "Roles are created successfully";
    }
    public function addUsers()
    {
        $user = new User();
        $user->name = "Geralt";
        $user->email = "geralt@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $roleids = [1, 2];
        $user->roles()->attach($roleids);
        $user = new User();
        $user->name = "Yennefer";
        $user->email = "yennefer@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $roleids = [2, 3, 4];
        $user->roles()->attach($roleids);
        $user = new User();
        $user->name = "Triss";
        $user->email = "triss@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $roleids = [3, 4, 5];
        $user->roles()->attach($roleids);
        return "Record has been created successfully!";
    }
    public function getAllRolesByUser($id)
    {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }
    public function getAllUsersByRole($id)
    {
        $role = Role::find($id);
        $users = $role->users;
        return $users;
    }
}
