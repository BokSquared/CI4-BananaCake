<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        return view('landingPage');
    }

    public function login(): string
    {
        return view('login'); 
    }

    public function signup(): string
    {
        return view('signup'); 
    }

    public function moodPage(): string
    {
        return view('moodPage'); 
    }

    public function roadMap(): string
    {
        return view('roadMap'); 
    }
}
