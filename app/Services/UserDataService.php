<?php 

declare(strict_types=1);

namespace App\Services;

use App\Models\User;

class UserDataService {
    public function create($request): string
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);

        return 'User is created';
    }

    public function get(): User
    {
        return User::query()->first();
    }

    public function update($request): string
    {
        $user = User::query()->first();
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        return "User is updated successfully";
    }
}