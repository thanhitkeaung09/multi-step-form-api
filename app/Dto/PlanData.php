<?php 

declare(strict_types=1);

namespace App\Dto;

class PlanData implements Dto
{
    public function __construct(
        public string $title,
        public string $price,
        public string|null $promotion
    )
    {
        
    }

    public static function of(array $data):PlanData
    {
        return new PlanData(
                title :$data['title'],
                price : $data['price'],
                promotion : $data['promotion']
                
        );
    }

    public function toArray(): array
    {
        return [
            'title'=>$this->title,
            'price'=>$this->price,
            'promotion'=>$this->promotion
        ];
    }
}