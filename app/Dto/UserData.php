<?php 

declare ( strict_types=1);

namespace App\Dto;

class UserData implements Dto {

    public function __construct(
        public string $name,
        public string $email,
        public string $phone

    )
    {
        
    }

    public static function of(array $data): UserData
    {
        return new UserData(
            name : $data['name'],
            email : $data['email'],
            phone : $data['phone']
        );
    }

    public function toArray(): array
    {
        return [
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone
        ];
    }
}