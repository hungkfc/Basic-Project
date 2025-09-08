<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Response;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // public function getListAllUsers()
    // {
    //     $result = $this->userRepository->getListAllUsers();

    //     return [
    //         'data' => $result,
    //         'message' => 'Danh sách người dùng đã được tải thành công',
    //         'cache' => null,
    //     ];
    // }
    public function search()
    {
        $user = $this->userRepository->getAllAPI();
        // dd($user);
        if ($user) {
            $dataAll = [
                'data' => UserResource::collection($user)
            ];
        }
        return $dataAll;
    }
}