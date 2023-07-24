<?php 

declare(strict_types=1);

namespace App\Services;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PlanDataService {
    public function create($request)
    {
        $id = $request->id;
        $one_plan = Plan::find($id);
    
        if (!$one_plan) {
            return "Plan not found for the given ID.";
        }
    
        // Update is_choose for all plans to false first
        Plan::query()->update(['is_choose' => false]);
    
        // Set is_choose to true for the specific plan with the given ID
        $one_plan->is_choose = true;
        $one_plan->save();
    
        return "Plan is created successfully";
    }

    public function update($request)
    {
        $planUser = DB::table('plan_users')->first();

        DB::table('plan_users')
        ->update([
            'plan_id' => $request->id,
            'user_id' => $planUser->user_id
        ]);

    return "Plan is updated successfully";
    }

    public function get()
    {
        return Plan::query()->get()->take(3);
    }

    public function old()
    {
        $planUser = DB::table('plan_users')->first();
        $planUser->is_choose = true;
        return $planUser;
    }
}