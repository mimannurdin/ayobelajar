<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function ppkn()
    {
        return view('main/ppkn');
    }
    public function math()
    {
        return view('main/math');
    }
    public function ipa()
    {
        return view('main/ipa');
    }
    public function ips()
    {
        return view('main/ips');
    }
}
