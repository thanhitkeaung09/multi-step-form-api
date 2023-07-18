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
            AddOn::create(["user_id"=>$user->id,'add_on_id'=>$id,'is_choosen'=>$request->is_choosen]);
        }
        return "AddOn is created successfully";
    }

    public function get()
    {
        return AddOn::query()->get();
    }

    public function update($request)
    {
        AddOn::query()->delete();
        $user = User::query()->first();
        foreach($request->add_on_ids as $id){
            AddOn::create(["user_id"=>$user->id,'add_on_id'=>$id,'is_choosen'=>$request->is_choosen]);
        }
        return "AddOn is updated successfully";
        
    }
}