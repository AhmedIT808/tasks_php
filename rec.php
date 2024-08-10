<?php

class Rectangle
{
    public $length;
    public $width;

    public function __construct(float $l, float $w)
    {
        $this->length = $l;
        $this->width = $w;
    }

    public function getLength():void
    {
        return $this->length;
    }

    public function getWidth():void
    {
        return $this->width;
    }

    public function getArea():float
    {
        return $this->length * $this->width;
    }

    public function getPerimeter():float
    {
        return 2 * ($this->length + $this->width);
    }
}

$rec = new Rectangle(7.5, 7.5);
echo "Length: " . $rec->getLength() . "\n";
echo "Width: " . $rec->getWidth() . "\n";
echo "Area: " . $rec->getArea() . "\n";
echo "Perimeter: " . $rec->getPerimeter() . "\n";

?>