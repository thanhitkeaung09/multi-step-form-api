<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOnDataRequest;
use App\Http\Responses\ApiSuccessResponse;
use App\Services\AddOnDataService;
use Illuminate\Http\Request;

class AddOnController extends Controller
{
    public function __construct(
        public AddOnDataService $addOnDataService
    )
    {
        
    }
    public function __invoke(Request $request)
    {
        return new ApiSuccessResponse($this->addOnDataService->create($request));
    }

    public function get()
    {
        return new ApiSuccessResponse($this->addOnDataService->get());
    }

    public function update(Request $request)
    {
        return new ApiSuccessResponse($this->addOnDataService->update($request));
    }

    public function old()
    {
        return new ApiSuccessResponse($this->addOnDataService->old());
    }
}
