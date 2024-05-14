<?php
    class Car {

        //properties
        public $brand;
        public $model;
        public $color;

        //methods

        public function start() {
            echo "The $this->color $this->brand $this->model is starting";
        }

        public function drive() {
            echo "Driving the $this->model ...";
        }
    }

    // create an instance

    $myCar = new Car();

    $myCar->brand = "Honda";
    $myCar->model = "Civid";
    $myCar->color = "blue";

    $myCar->start();
    $myCar->drive();
?>