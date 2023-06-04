<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Account\AccountService;

class AccountController extends Controller
{
    public $AccountService;
    public function __construct(AccountService $AccountService)
    {
        $this->AccountService = $AccountService;
    }

    public function index(Request $request)
    {
        return $this->AccountService->index($request);
    }
}
