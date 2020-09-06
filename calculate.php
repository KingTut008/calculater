<?php

namespace App\Enter;

require_once $_SERVER['DOCUMENT_ROOT'] . "/classes/calculate.php";
use App\Calculate\Calculate as Calculate;

function checkNumber($value) {
    if (is_numeric($_POST['value'])) {
        return true;
    } else {
        return $value . " - не число!";
    }
}

$value1 = isset($_POST['value1']) ? $_POST['value1'] : die("Вы не ввели первое число!");
$value2 = isset($_POST['value2']) ? $_POST['value2'] : die("Вы не ввели второе число!");
$param = isset($_POST['param']) ? $_POST['param'] : die("Вы не ввели параметр!");

if (checkNumber($value1)) {
    if(checkNumber($value2)) {
        $calculate = new Calculate($value1, $value2);
        switch($_POST['param']) {
            case "+": 
                echo json_encode($calculate->sum());
            break;
            case "-": 
                echo json_encode($calculate->difference());
            break;
            case "/": 
                echo json_encode($calculate->multiply());
            break;
            case "*": 
                echo json_encode($calculate->divide());
            break;
            default:
            echo json_encode($_POST['param'] . " - такого действия не существует!");
        break;
        }
    } else {
        echo json_encode($value2);
    }
} else {
    echo json_encode($value1);
}
