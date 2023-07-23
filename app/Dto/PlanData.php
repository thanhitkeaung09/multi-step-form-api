<?php 

declare(strict_types=1);

namespace App\Dto;

class PlanData implements Dto
{
    public function __construct(
        public string $title,
        public string $icon,
        public string $month_price,
        public string $year_price,
        public string $priceString,
        public string $priceYear,
        public string|null $promotion,
    )
    {
        
    }

    public static function of(array $data):PlanData
    {
        return new PlanData(
                title :$data['title'],
                icon: $data['icon'],
                month_price: $data['month_price'],
                year_price: $data['year_price'],
                priceString: $data['priceString'],
                priceYear: $data['priceYear'],
                promotion : $data['promotion'],
                
        );
    }

    public function toArray(): array
    {
        return [
            'title'=>$this->title,
            'icon'=>$this->icon,
            "month_price"=>$this->month_price,
            "year_price"=>$this->year_price,
            "priceString"=>$this->priceString,
            "priceYear"=>$this->priceYear,
            'promotion'=>$this->promotion,
        ];
    }
}