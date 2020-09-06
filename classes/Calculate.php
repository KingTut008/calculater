<?php

namespace App\Calculate;

class Calculate
{   
    private $value1;
    private $value2;

    public function __construct($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function sum() {
        return $this->value1 + $this->value2;
    }

    public function difference() {
        return  $this->value1 - $this->value2;
    }

    public function multiply() {
        return  $this->value1 / $this->value2;
    }

    public function divide() {
        return  $this->value1 * $this->value2;
    }
}