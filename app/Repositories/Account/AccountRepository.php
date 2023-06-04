<?php

namespace App\Repositories\Account;



class AccountRepository 
{
    public function __construct()
    {
       
    }

    public function index(){
        return view('account.index');
    }
}
