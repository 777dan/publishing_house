<?php
require_once "autoload.php";
require_once "Circulation_cost.php";
require_once "Publishing_house.php";
$card = new Card("Андрей Кравченко", "Открытка", "", "105x180");
$poster = new Poster("Мария Клименко", "02.02.2023", "Афиша", "", "400x500");
$newspaper = new Newspaper("4", "01.02.2023", "Газета", "", "1000x2000");
$book = new Book("70", "Дарья Григорьева", "Да", "Георгий Антоненко", "Книга", "", "500x800");
$album = new Album("30", "Афанасий Горошанский", "Георгий Антоненко", "Иллюстрированный подарочный альбом", "", "3000x3000");

$card->setCost();
echo $card;

$poster->setCost();
echo $poster;

$newspaper->setCost();
echo $newspaper;

$book->setCost();
echo $book;

$album->setCost();
echo $album;