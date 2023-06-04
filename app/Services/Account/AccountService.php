<?php

namespace App\Services\Account;

use App\Repositories\Account\AccountRepository;

class AccountService
{
    private $AccountRepository;

    public function __construct(
        AccountRepository $AccountRepository,

    ) {
       
        $this->AccountRepository = $AccountRepository;
    }

    public function index()
    {
        return view('account.index');
    }
}