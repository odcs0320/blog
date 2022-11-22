<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function hello()
    {
        return 'Hello';
    }

    public function play($id)
    {
        if ($id == 1) {
            return view('game1');
        } elseif ($id == 2) {
            return view('game2');
        }
    }

    public function dashboard()
    {
        //透過Controller傳多筆數值

        //compact
        //$name = 'Jim Cheng';
        //$date = '20221118';
        //return view('dashboard', compact('name', 'date'));

        //with
        //return view('dashboard')->with(['name' => 'Jim Cheng', 'date' => '20221118']);

        //view
        //$data = [];
        //$data['name'] = 'Jim Cheng';
        //$data['date'] = '20221118';
        //return view('dashboard', $data);

        return view('dashboard');

    }

    public function dashboard1()
    {
        //透過Controller傳多筆數值

        //compact
        //$name1 = 'Senkawa Chihiro';
        //$name2 = 'Jim Cheng';
        //return view('test.dashboard1', compact('name1', 'date2'));

        //with
        //return view('test.dashboard1')->with(['name1' => 'Senkawa Chihiro', 'name2' => 'Jim Cheng']);

        //view
        //$data = [];
        //$data['name1'] = 'Senkawa Chihiro';
        //$data['name2'] = 'Jim Cheng';
        //return view('test.dashboard1', $data);

        return view('dashboard1');

    }
}