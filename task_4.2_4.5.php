<?php

echo "=================================task1 4.2 ======================================================<br>";


class Person
{
    protected string $name;
    protected string $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function toString(): void
    {
        echo "This is your name: " . $this->name . "<br>" . "This is your address: " . $this->address . "<br>";
    }
}

$opo = new Person("Ahmed Sayed", "Cairo");
$opo->toString();
echo"=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====<br>";
class student extends Person
{
    public string $program;
    public int $year;
    public float $fee;
    public function __construct(string $name,string $address,string $program,int $year,float $fee)
    {
        parent::__construct($name,$address);
        $this->program =$program;
        $this->year=$year;
        $this->fee=$fee;
    }
    public function getProgram():string
    {
        return $this->program;
    }

    public function setProgram(string $pro):void
    {
         $this->program=$pro;
    }

    public function getYear():int 
    {
        return $this->year;
    }

    public function setYear(int $year):void 
    {
         $this->year=$year;
    }
    public function getFee():float
    {
        return $this->fee;
    }

    public function setFee(float $fee):void
    {
         $this->fee=$fee;
    }
    public function toString():void
    {
        echo " Name: " . $this->name . "<br>" . " Address: " . $this->address . "<br>"."  Program : $this->program"."<br>
         Year: ".$this->year."<br>"."Fee: ".$this->fee."<br>";
    }
}


$stu=new student("Ahmed Sayed","Asyut","PhP",23,4500.75);
$stu->toString();

echo"=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====<br>";



class staff extends Person
{
    public string $school;
    public float $pay;
    public function __construct(string $name,string $address,string $school,float $pay)
    {
        parent::__construct($name,$address);
        $this->school =$school;
        $this->pay=$pay;
    }
    public function getSchool():string
    {
        return $this->school;
    }

    public function setSchool(string $school):void
    {
         $this->school=$school;
    }

    
    public function getPay():float
    {
        return $this->pay;
    }

    public function setPay(float $pay):void
    {
         $this->pay=$pay;
    }
    public function toString():void
    {
        echo " Name: " . $this->name . "<br>" . " Address: " . $this->address . "<br>"."  School : $this->school"."<br>"."Pay: ".$this->pay."<br>";
    }
}

$stf=new staff("Ahmed Sayed","Asyut","School of Information Technology",15000.500);
$stf->toString();

echo "=================================task2 4.5 ====================================================== <br>";


class Shape {
    protected string $color;
    protected bool $filled;

    public function __construct(string $color = "red", bool $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function __toString(): string {
        return "A Shape with color of " . $this->color . " and " . ($this->filled ? "filled" : "not filled");
    }
}

$shape = new Shape("red", true);
echo $shape . "<br>";
echo "=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====<br>";

class Circle extends Shape {
    private float $radius;

    public function __construct(float $radius = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string {
        return "A Circle with radius=" . $this->radius . ", which is a subclass of " . parent::__toString();
    }
}

$circle = new Circle(2.5, "blue", false);
echo $circle . "<br>";
echo "Area: " . $circle->getArea() . "<br>";
echo "Perimeter: " . $circle->getPerimeter() . "<br>";
echo "=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====<br>";

class Rectangle extends Shape {
    private float $width;
    private float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "A Rectangle with width=" . $this->width . " and length=" . $this->length . ", which is a subclass of " . parent::__toString();
    }
}

$rectangle = new Rectangle(2.0, 4.0, "green", true);
echo $rectangle . "<br>";
echo "Area: " . $rectangle->getArea() . "<br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "<br>";
echo "=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====^^^^^=====<br>";

class Square extends Rectangle {

    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->getWidth();
    }

    public function setSide(float $side): void {
        $this->setWidth($side);
        $this->setLength($side);
    }

    public function __toString(): string {
        return "A Square with side=" . $this->getSide() . ", which is a subclass of " . parent::__toString();
    }
}

$square = new Square(3.0, "yellow", true);
echo $square . "<br>";
echo "Area: " . $square->getArea() . "<br>";
echo "Perimeter: " . $square->getPerimeter() . "<br>";


?>