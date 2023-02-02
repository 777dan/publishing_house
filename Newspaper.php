<?php
class Newspaper extends Publishing_house implements Circulation_cost
{
    private $pages_number, $date;
    public function __construct($pages_number, $date, $name, $exemplar_price, $circulation)
    {
        parent::__construct($name, $exemplar_price, $circulation);
        $this->pages_number = $pages_number;
        $this->date = $date;
    }
    public function setCost()
    {
        $this->exemplar_price = (int)(((explode("x", $this->circulation)[0])/ 2) / $this->pages_number);
    }
    function __toString()
    {
        return "
        Количество страниц: {$this->pages_number}\n
        Дата: {$this->date}\n
        Название: {$this->name}\n
        Цена экземпляра: {$this->exemplar_price} грн\n
        Тираж: {$this->circulation}\n
        ";
    }
}