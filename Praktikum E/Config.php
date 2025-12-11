<?php 
class Config { 
    protected static string $timezone = "Asia/Jakarta"; 

    public static function getTimezone(): string { 
        return static::$timezone; 
    } 
} 

class ConfigDev extends Config { 
    protected static string $timezone = "UTC"; 
} 

echo Config::getTimezone() . "\n"; 
echo ConfigDev::getTimezone() . "\n";
