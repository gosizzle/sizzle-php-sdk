<?php
spl_autoload_register(
    function ($class) {
        if (0 !== strpos($class, 'SizzlePHP')) {
            return;
        } else {
            $class = ltrim($class, 'SizzlePHP');
        }
        $file = __DIR__.'/'.str_replace("\\", "/", $class).'.php';
        if (is_file($file)) {
            include $file;
        }
    }
);
