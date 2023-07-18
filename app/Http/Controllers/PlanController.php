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
    public function __invoke(PlanDataRequest $request)
    {
        return new ApiSuccessResponse($this->planDataService->create($request->payload()));
    }

    public function update(PlanDataRequest $request)
    {
        return new ApiSuccessResponse($this->planDataService->update($request)) ;
    }
}
