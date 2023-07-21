<?php

namespace App\Http\Controllers;

use App\Http\Responses\ApiSuccessResponse;
use App\Models\AddOn;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class FinishController extends Controller
{
    public function __invoke()
    {
        $user = User::query()->first();
        $plan = Plan::query()->first();
        $add_on = AddOn::query()->where("user_id",$user->id)->get()->take(2);
        return new ApiSuccessResponse(["plan"=>$plan,"add_on"=>$add_on]);
    }
}
