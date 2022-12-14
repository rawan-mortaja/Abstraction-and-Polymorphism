<?php
abstract class Shape
{
   abstract public function getArea();
}

class Rectangle extends Shape
{
   protected $width;
   protected $height;

   public function __construct($width, $height)
   {
      $this->width = $width;
      $this->height = $height;
   }

   public function getArea()
   {
      return $this->width * $this->height;
   }
}

class Circle extends Shape
{
   protected $radius;

   public function __construct($radius)
   {
      $this->radius = $radius;
   }

   public function getArea()
   {
      return pi() * $this->radius * $this->radius;
   }
}

$rectangle = new Rectangle(10, 5);

$circle = new Circle(10);

$rectangleArea = $rectangle->getArea();
$circleArea = $circle->getArea();
