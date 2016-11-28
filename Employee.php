<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/28/2016
 * Time: 12:17 PM
 */
class Employee
{

    public function actionResult()
    {
        $a = 23;
        $y = 3;
    echo " Answer " . $a * $y;
    }




}

$Emp = new Employee();
$Emp->actionResult();