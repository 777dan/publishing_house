<?php
class Card extends Publishing_house implements Circulation_cost
{
    private $artist;
    public function __construct($artist, $name, $exemplar_price, $circulation)
    {
        parent::__construct($name, $exemplar_price, $circulation);
        $this->artist = $artist;
    }
    public function setCost()
    {
        $this->exemplar_price = (int)explode("x", $this->circulation)[0] / 3;
    }
    function __toString()
    {
        return "
        Художник: {$this->artist}\n
        Название: {$this->name}\n
        Цена экземпляра: {$this->exemplar_price} грн\n
        Тираж: {$this->circulation}\n
        ";
    }
}
