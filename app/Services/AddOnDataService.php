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
        $user = User::query()->first();
        foreach($ids as $id){
            DB::table('add_on_users')->insert([
                "add_on_id"=>$id,
                "user_id"=>$user->id
            ]);
        }
        return "Add On is created successfully";
      
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