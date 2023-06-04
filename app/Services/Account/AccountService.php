<?php

namespace App\Services\Account;

use App\Models\User;
use App\Repositories\Account\AccountRepository;
use Exception;
use Illuminate\Support\Facades\DB;


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

    public function register($request, $platform = 'web')
    {
        DB::beginTransaction();
        try {
            $formMember =
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,

                ];
            $member = User::create($formMember);
            //đoạn này thêm đăng kí xong đăng nhập luôn
            DB::commit();

            return handleResponse($statusCode = 200, 'Đăng kí thành công');
        } catch (Exception $e) {
            DB::rollback();
        }
        return;
    }
}
