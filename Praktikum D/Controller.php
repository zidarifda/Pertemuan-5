<?php 
class BaseController { 
    public static function route(): void { 
        echo "Routing di BaseController\n"; 
    } 

    public static function handle(): void { 
        static::route();
    } 
}

class UserController extends BaseController { 
    public static function route(): void { 
        echo "Routing di UserController\n"; 
    } 
}

UserController::handle();
