<?php

class Basket
{
    public float $amount;
    public float $price;
    public string $type;
    public float $tax;

    public function __construct($amount, $price, $type, $tax)
    {
        $this->amount = $amount;
        $this->price = $price;
        $this->type = $type;
        $this->tax = $tax;
    }
    public function pricePerItemAmount()
    {
        $pricePerItemAmount = $this->amount * $this->price;
        return $pricePerItemAmount;
    }
    public function discount()
    {
        if ($this->type === 'fruit') {
            $pricePerItemAmount = $this->amount * ($this->price / 2);
            return $pricePerItemAmount;
        } else
            $pricePerItemAmount = $this->amount * $this->price;
        return $pricePerItemAmount;
    }
    public function tax()
    {
        $taxPerItem = (($this->pricePerItemAmount()) / 100) * $this->tax;
        return $taxPerItem;
    }
}
$banana = new Basket(6, 1, 'fruit', 6);
$apple = new Basket(3, 1.5, 'fruit', 6);
$wine = new Basket(2, 10, 'alcohol', 21);

$totalPrice = $banana->pricePerItemAmount() + $apple->pricePerItemAmount() + $wine->pricePerItemAmount();
echo 'Total price: ' . $totalPrice . '<br>';
$discountPrice = $banana->discount() + $apple->discount() + $wine->discount();
echo 'Discount price: ' . $discountPrice . '<br>';
