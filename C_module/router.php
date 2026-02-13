<?php 

class router {
    static $routes = [];

    static function path($method, $uri, $func){
        self::$routes = [$method, $uri, $func];
    }

    static function Request(){
        $method = $_SERVER["REQUEST_METHOD"];
        $uri = $_SERVER["REQUEST_URI"];

        
    }
}