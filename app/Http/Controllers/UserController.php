<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataRequest;
use App\Http\Responses\ApiSuccessResponse;
use App\Services\UserDataService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        public UserDataService $userDataService
    )
    {
        
    }
    public function __invoke(UserDataRequest $request)
    {
        return new ApiSuccessResponse($this->userDataService->create($request->payload()));
    }

    public function get()
    {
        return new ApiSuccessResponse($this->userDataService->get());
    }

    public function update(UserDataRequest $request)
    {
        return new ApiSuccessResponse($this->userDataService->update($request->payload()));
    }
}
