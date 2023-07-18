<?php 

declare(strict_types=1);

namespace App\Dto;

class AddOnData implements Dto{
    public function __construct(
        // public string $title,
        // public string $price,
        public bool $is_choosen
    )
    {
        
    }

    public static function of(array $data):AddOnData
    {
        return new AddOnData(
            // title : $data['title'],
            // price : $data['price'],
            is_choosen : $data['is_choosen']
        );
    }

    public function toArray(): array
    {
        return [
            // "title"=>$this->title,
            // "price"=>$this->price,
            "is_choosen"=>$this->is_choosen
        ];
    }
}