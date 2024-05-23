<?php


//Dump&Die
function dd($value)
{
    //Print Environment Variables
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    //Terminate Script Execution
    die();
}

function urlIs($value)  {
    return $_SERVER['REQUEST_URI'] === $value;
}
function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
}