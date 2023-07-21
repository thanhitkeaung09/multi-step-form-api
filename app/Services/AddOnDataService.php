<?php 

declare(strict_types=1);

namespace App\Services;

use App\Models\AddOn;
use App\Models\User;

class AddOnDataService {
    public function create($request)
    {
        $user = User::query()->first();
        foreach($request->add_on_ids as $id){
            AddOn::create(["user_id"=>$user->id,'add_on_id'=>$id,'is_choosen'=>$request->is_choosen,'type'=>$request->type]);
        }
        return "AddOn is created successfully";
    }

    public function get()
    {
        return AddOn::query()->get()->take(2);
    }

    public function update($request)
    {
        // AddOn::query()->delete();
        $add_on = AddOn::truncate();
        // $add_on->turncate();
        $user = User::query()->first();
        foreach($request->add_on_ids as $id){
            AddOn::create(["user_id"=>$user->id,'add_on_id'=>$id,'is_choosen'=>$request->is_choosen,'type'=>$request->type]);
        }
        return "AddOn is updated successfully";
        
    }
}