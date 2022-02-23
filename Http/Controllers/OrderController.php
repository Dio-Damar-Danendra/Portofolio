<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createGender(Request $input)
    {
        $gender = new Gender();
        $gender->gender_id = $input->gender_id;
        $gender->gender_desc = $input->gender_desc;
        $gender->save();
        return redirect()->back();
    }
}
