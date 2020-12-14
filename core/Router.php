<?php
namespace Core;
final class Router
{
    public $var = 5;

    public $var1 = 'test var';

    public function run()
    {
        foreach ($this as $key => $value) {
            var_export("$key => $value" );
            echo "\r\n";
        }
    }
}

