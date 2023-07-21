<?php 

declare(strict_types=1);

namespace App\Services;

use App\Models\Plan;
use App\Models\User;

class PlanDataService {
    public function create($request):string
    {
        $user = User::query()->first();
        Plan::create([
            'user_id'=>$user->id,
            'title'=>$request->title,
            'price'=>$request->price,
            'promotion'=>$request->promotion,
            'type'=>$request->type
        ]);
        return 'Plan is created successfully';
    }

    public function update($request):string
    {
        $plan = Plan::query()->first();
        $plan->update([
            'title'=>$request->title,
            'price'=>$request->price,
            'promotion'=>$request->promotion,
            'type'=>$request->type
        ]);
        return "Plan is updated successfully";
    }
}