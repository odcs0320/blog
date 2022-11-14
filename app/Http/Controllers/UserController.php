<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    //括號內為預設值
    public function show($id = 666)
    {
        return 'User' . $id;
    }

}
