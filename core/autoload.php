<?php
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    public static function autoload($class)
    {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $baseDir = __DIR__ . '/../'; // Go back one directory from the autoload.php location

        $filePath = $baseDir . $class . '.php';
        $filePath = str_replace('App' . DIRECTORY_SEPARATOR, 'core/app/', $filePath);

        if (file_exists($filePath)) {
            require_once $filePath;
        } else {
            echo "File not found: $filePath";
        }
    }
}

Autoloader::register();
