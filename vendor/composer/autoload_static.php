<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fb287324f518c8278515bf266224b54
{
    public static $classMap = array (
        'app\\models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4fb287324f518c8278515bf266224b54::$classMap;

        }, null, ClassLoader::class);
    }
}
