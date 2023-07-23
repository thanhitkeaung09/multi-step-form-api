<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanDataRequest;
use App\Http\Responses\ApiSuccessResponse;
use App\Services\PlanDataService;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function __construct(
        public PlanDataService $planDataService
    )
    {
        
    }
    public function __invoke(Request $request)
    {
        return new ApiSuccessResponse($this->planDataService->create($request));
    }

    public function update(Request $request)
    {
        return new ApiSuccessResponse($this->planDataService->update($request)) ;
    }

    public function get()
    {
        return new ApiSuccessResponse($this->planDataService->get());
    }

    public function old()
    {
        return new ApiSuccessResponse($this->planDataService->old());
    }
}
