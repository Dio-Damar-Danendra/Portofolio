<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function createAccount(Request $input)
    {
        $account = new Account();
        $account->account_id = $input->account_id;
        $account->role_id = $input->role_id;
        $account->gender_id = $input->gender_id;
        $account->first_name = $input->first_name;
        $account->middle_name = $input->middle_name;
        $account->last_name = $input->last_name;
        $account->email = $input->email;
        $account->password = $input->password;
        $account->display_picture_link = $input->display_picture_link;
        $account->delete_flag = $input->delete_flag;
        $account->modified_at = $input->modified_at;
        $account->modified_by = $input->modified_by;
        $account->save();

        $this->validate($request, [
            'first_name' => 'required|max:25',
            'middle_name' => 'max:25',
            'last_name' => 'required|max:25',
            'gender_id'=> 'required|min: 1| max : 2',
            'role_id'=> 'required|min: 1| max : 2',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'display_picture' => 'required|file'
            ]);

        return redirect()->back();
    }
}
