<?php
/*using class*/
class Item{

    public float $amount;
    public float $price;
    public string $type;
    public float $totalPrice;

    public function __construct($amount, $price, $type){
        $this->amount = $amount;
        $this->price = $price;
        $this->type = $type;
        }
    public function totalPrice(){
        $totalPrice = $this->amount * $this->price;
        return $totalPrice;
    }

}
$basket = [
'banana' => new Item (6, 1, 'fruit'),
'Apple' => new Item (3, 1.5, 'fruit'),
'wine' => new Item (2, 10, 'alcohol'),
];
function priceAll($basket){
    $priceAll = 0;
    foreach ($basket as $item){
        $priceAll = $priceAll + $item->totalPrice();    
    }
    return $priceAll;
}

$result = priceAll($basket);
echo $result . '<br>';
echo priceall($basket);

// how much is tax


