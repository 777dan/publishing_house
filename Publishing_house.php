<?php
abstract class Publishing_house implements Circulation_cost
{
    protected $name, $exemplar_price, $circulation;
    public function __construct($name, $exemplar_price, $circulation)
    {
        $this->name = $name;
        $this->exemplar_price = $exemplar_price;
        $this->circulation = $circulation;
    }
}
