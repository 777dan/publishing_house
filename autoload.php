<?php
function autoload($className)
{
    $fileName = $className . '.php';
    include $fileName;
}

spl_autoload_register("autoload");