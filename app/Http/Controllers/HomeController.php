<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    // public $AccountService;
    public function __construct()
    {
        // $this->AccountService = $AccountService;
    }

    public function index(Request $request)
    {
        return view("home.index");
    }

}
