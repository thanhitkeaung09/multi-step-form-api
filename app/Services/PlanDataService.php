<?php 

declare(strict_types=1);

namespace App\Services;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PlanDataService {
    public function create($request)
    {
        $user = User::query()->first();
        DB::table('plan_users')->insert([
            "plan_id"=>$request->id,
            "user_id"=>$user->id
        ]);
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