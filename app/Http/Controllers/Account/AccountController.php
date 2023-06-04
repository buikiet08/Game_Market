<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Account\AccountService;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request) {
        dd($request->all());
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Đăng ký thành công');

    }
}
