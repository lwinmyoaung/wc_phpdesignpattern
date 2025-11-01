<?php

require_once __DIR__ . "/Shape.php";
require_once __DIR__ . "/ShapeFacade.php";
require_once __DIR__ . "/Circle.php";
require_once __DIR__ . "/Rectangle.php";
require_once __DIR__ . "/Square.php";

class User1
{
    public function __construct()
    {
        // // Normal class Instantiate and call method
        // $circle = new Circle();
        // $rectangle = new Rectangle();
        // $square = new Square();

        // $circle->draw();
        // $rectangle->draw();
        // $square->draw();

        // Using Facade Class
        $obj = new ShapeFacade();
        $obj->drawCircle();
        $obj->drawRectangle();
        $obj->drawSquare();
    }
}

new User1;