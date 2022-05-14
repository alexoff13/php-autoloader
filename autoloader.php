<?php
spl_autoload_register(static function (string $className) {
    $root = "persons\\";
    if (str_starts_with($className, $root)) {
        $filePath = substr($className, strlen($root));
        require_once __DIR__ . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR .
            str_replace("\\", DIRECTORY_SEPARATOR, $filePath) . ".php";
    }
});