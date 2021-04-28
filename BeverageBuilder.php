<?php


final class BeverageBuilder
{

    private $product;

    /**
     * BeverageBuilder constructor.
     * @param AbstractBeverage $beverage
     */
    public function __construct(AbstractBeverage $beverage)
    {
        $this->product = $beverage;
    }

    public function addMilk(): void
    {
        $this->product->price += 0.1;
    }

    public function addCream(): void
    {
        $this->product->price += 0.15;
    }

    public function addCinnamon(): void
    {
        $this->product->price += 0.05;
    }

    public function getBeverage(): AbstractBeverage
    {
        return $this->product;
    }
}
