<?php

//Constructor

class Fruit{
    private $name;
    private $color;
    private $price;

    function __construct($name, $color, $price) {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    function introduce () {
        return $this->name . " - " . $this->color . " - " . $this->price;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit("Apel", "Merah", 5000);

echo $apple->introduce();

?>