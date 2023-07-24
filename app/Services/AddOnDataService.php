<?php 

declare(strict_types=1);

namespace App\Services;

use App\Models\AddOn;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AddOnDataService {
    public function create($request)
    {
        $ids = $request->ids;
        $type = $request->type;
    
        // Find the plans with the given IDs
        $plans = AddOn::whereIn('id', $ids)->get();
    
        // Check if all IDs are valid and at least one plan is found
        if (count($plans) === 0 || count($ids) !== count($plans)) {
            return "One or more plans not found for the given IDs.";
        }
    
        // Update is_month and is_year for all plans to false first
        AddOn::query()->update([
            'is_month' => false,
            'is_year' => false,
            'is_choose' => false
        ]);
    
        // Set is_month and is_year based on the given type for each plan
        foreach ($plans as $plan) {
            if ($type === 'month') {
                $plan->is_choose = true;
                $plan->is_month = true;
                $plan->is_year = false;
            } elseif ($type === 'year') {
                $plan->is_choose = true;
                $plan->is_month = false;
                $plan->is_year = true;
            }
    
            $plan->save();
        }
    
        return "AddOn are updated successfully.";
    }

    public function get()
    {
        return AddOn::query()->get()->take(3);
    }

    public function update($request)
    {
        $planUser = User::query()->first();
        $ids = $request->ids;
        DB::table('add_on_users')->truncate();
        foreach($ids as $id){
            DB::table('add_on_users')
            ->insert([
                'add_on_id' => $id,
                'user_id' => $planUser->id
            ]);
        }
        return "Plan is updated successfully";
        
    }

    public function old()
    {
        $datas = DB::table('add_on_users')->get();
        foreach($datas as $data){
            $data->is_choose = true;
        }
        return $datas;
    }
}