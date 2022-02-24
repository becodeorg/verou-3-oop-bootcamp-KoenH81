<?php
/* Using no class*/
$banana = new stdClass();
$banana->amount = 6;
$banana->price = 1;
$banana->type = 'fruit';

$apple = new stdClass();
$apple->amount = 3;
$apple->price = 1.5;
$apple->type = 'fruit';

$wine = new stdClass();
$wine->amount = 2;
$wine->price = 10;
$wine->type = 'alcohol';

$totalPrice = $banana->price * $banana->amount  + $apple->price * $apple->amount + $wine->price * $wine->amount;
echo 'Total price: ' . $totalPrice . '<br>';
$fruitTax = ((($banana->price * $banana->amount) + ($apple->price * $apple->amount)) / 100) * 6;
echo 'Fruit tax: ' . $fruitTax . '<br>';
$wineTax = (($wine->price * $wine->amount) / 100) * 21;
echo 'Wine tax: ' . $wineTax . '<br>';
$totalTax = $fruitTax + $wineTax;
echo 'Total tax: ' . $totalTax . '<br><br><br>';

/*using class*/
echo 'With class (and style).<br><br><br>';
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
$fruitTax = $banana->tax() + $apple->tax();
echo 'Fruit tax: ' . $fruitTax . '<br>';
$wineTax = $wine->tax();
echo 'Wine tax: ' . $wineTax . '<br>';
$totalTax = $fruitTax + $wineTax;
echo 'Total tax: ' . $totalTax . '<br><br><br>';
