<?php

class Book{

    protected $name;
    protected $price;

    public static $myName='Akhilesh Thakur';
    public function __construct($name,$price)
    {
        $this->name=$name;
        $this->price=$price;    
    }

    public function __toString()
    {
        echo $this->getPrice();
    }

    public function setBookName($name)
    {
        $this->name=$name;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getBookName()
    {
        return $this->name;
    }

    public static function getMyName()
    {
        return self::$myName;
    }
}

class Magzines extends Book
{
    protected $title;
    protected $year;
    public function __construct($title,$year,$name,$price)
    {
        $this->title=$title;
        $this->year=$year;
        parent::__construct($name,$price);
    }
}
?>