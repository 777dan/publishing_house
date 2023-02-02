<?php
class Poster extends Publishing_house implements Circulation_cost
{
    private $artist, $date;
    public function __construct($artist, $date, $name, $exemplar_price, $circulation)
    {
        parent::__construct($name, $exemplar_price, $circulation);
        $this->artist = $artist;
        $this->date = $date;
    }
    public function setCost()
    {
        $this->exemplar_price = (int)explode("x", $this->circulation)[0] / 5;
    }
    function __toString()
    {
        return "
        Художник: {$this->artist}\n
        Дата: {$this->date}\n
        Название: {$this->name}\n
        Цена экземпляра: {$this->exemplar_price} грн\n
        Тираж: {$this->circulation}\n
        ";
    }
}
