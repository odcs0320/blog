<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //括號內為預設值
    public function show($id = 666)
    {
        return 'User' . $id;
    }

    public function update(Request $request, $id)
    {
        // return 'User' . $id;
    }

}