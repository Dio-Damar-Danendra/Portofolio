<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function createRole(Request $input)
    {
        $role = new Role();
        $role->role_id = $input->role_id;
        $role->role_desc = $input->role_desc;
        $role->save();
        return redirect()->back();
    }
}
