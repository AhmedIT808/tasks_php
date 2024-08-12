<?php
class circle
{
    private float $radius;
    private string $color;

    public function __construct(float $r, string $c)
    {
        $this->radius = $r;
        $this->color = $c;
    }

    public function getradius(): float
    {
        return $this->radius;
    }

    public function getcolor(): string
    {
        return $this->color;
    }

    public function setradius(float $r): void
    {
        $this->radius = $r;
    }

    public function setcolor(string $c): void
    {
        $this->color = $c;
    }

    // دالة مخصصة لطباعة تفاصيل الكائن
    public function toString(): string
    {
        return "Circle radius = {$this->radius} <br> Circle color  = {$this->color}";
    }
}


$oop = new circle(5.8, "red");

$oop->setcolor("green");
echo $oop->toString();

//=================================employee================================================
class employee
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private float $salary;
    public function __construct(int $id,string $firstName,string $lastName,float $salary)
    {
        $this->$id=$id;
        $this->$firstName=$firstName;
        $this->$lastName=$lastName;
        $this->$salary=$salary;
    }
    public function getid():int
    {
        return $this->$id;
    }
    
    public function getFirstName():string
    {
        return $this->$firstName;
    }
    public function getLasttName():string
    {
        return $this->$lastName;
    }
    public function getName():string
    {
        return " the full name: {$this->firstName} {$this->lasttName}";
    }
    public function getsalary():float
    {
      return $this->$salary;
    }
    public function setSalary(float $s):float
    {
        return $this->$salary=$s;
    }
    public function toString():string
    {
        return " the id  {$this->$id} <br> the firstName {$this->firstName} <br> the lastName  {$this->lastName} <br> the full name : {$this->getName()} <br> the Salary: {$this->$salary} <br>";
    }

}

$opj =new employee(12,"Ahmed","Sayed",40000.50);
echo $opj->toString();

?>

