<?php

class DivideByZeroException extends Exception{

    public function getMsg(){
        return "Can't divide by zero";
    }
}
function divide($numerator, $denominator){
    if($denominator==0){
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}
try{
    $result = divide(10,0);
    return $result;
}
catch (DivideByZeroException $e){
    echo $e->getMsg();
}