<?php

namespace App;

final class App {

    private $object;

    public function getRandomClass($randomClass) {
        require_once $randomClass;

        $path = "\\App\Models\\";

        $parts = explode("/", $randomClass);
        $className = end($parts);
        $className = substr($className, 0, strpos($className, "."));

        $class = $path . $className;
        $this->object = new $class;


        return $this->object->viewAction();
    }


}