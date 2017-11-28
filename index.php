<?php
include_once('vendor/autoload.php');

use Users\UserFactory;

try{
    $oneElement = new UserFactory();
    $finalyOneElement = $oneElement->create($_POST['type']);
    $finalyOneElement->hello();
}catch (Exception $e){
    echo "Что-то пошло не так. Ошибка вида: \n". $e->getMessage();
}

?>