<?php

// Examples of generated beverages
final class ClientCodeGenerator
{
    public static function createCoffeWithMilkAndCream(): AbstractBeverage
    {
        $builder = self::generateBuilder(new Coffee());
        $builder->addCream();
        $builder->addMilk();
        return $builder->getBeverage();
    }

    private static function generateBuilder(AbstractBeverage $beverage): BeverageBuilder
    {
        return new BeverageBuilder($beverage);
    }
}
