<?php

$val1 = $_POST["val1"];

if ($val1 < 50) {
    echo "К сожалению, Вы не поступили.";
} else {
    echo "Поздравляем! Вы поступили!";
}
