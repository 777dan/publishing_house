<?php
class Book extends Publishing_house implements Circulation_cost
{
    private $pages_number, $writer, $illustrations, $artist;
    public function __construct($pages_number, $writer, $illustrations, $artist, $name, $exemplar_price, $circulation)
    {
        parent::__construct($name, $exemplar_price, $circulation);
        $this->pages_number = $pages_number;
        $this->writer = $writer;
        $this->illustrations = $illustrations;
        $this->artist = $artist;
    }
    public function setCost()
    {
        $this->exemplar_price = (int)(((explode("x", $this->circulation)[0]) + $this->pages_number) / 2);
        if ($this->illustrations === "Да") $this->exemplar_price += 20;
    }
    function __toString()
    {
        return "
        Количество страниц: {$this->pages_number}\n
        Автор: {$this->writer}\n
        Наличие иллюстрация: {$this->illustrations}\n
        Художник: {$this->artist}\n
        Название: {$this->name}\n
        Цена экземпляра: {$this->exemplar_price} грн\n
        Тираж: {$this->circulation}\n
        ";
    }
}
