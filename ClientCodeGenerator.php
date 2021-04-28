<?php

// Examples of generated beverages
final class ClientCodeGenerator
{
    public static function createCoffeWithMilkAndCream() {
        $builder = self::generateBuilder(new Coffee());
        $builder->addCream();
        $builder->addMilk();
        return $builder->getBeverage();
    }

    private static function generateBuilder(AbstractBeverage $beverage) {
        return new BeverageBuilder($beverage);
    }
}
