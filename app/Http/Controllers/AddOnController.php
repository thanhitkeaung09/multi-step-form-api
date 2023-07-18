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
    public function __invoke(AddOnDataRequest $request)
    {
        return new ApiSuccessResponse($this->addOnDataService->create($request));
    }

    public function get()
    {
        return new ApiSuccessResponse($this->addOnDataService->get());
    }

    public function update(AddOnDataRequest $request)
    {
        return new ApiSuccessResponse($this->addOnDataService->update($request));
    }
}
