<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc17bcf9bfd14bfe50ecfd33abe3a2d0d
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Users\\' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc17bcf9bfd14bfe50ecfd33abe3a2d0d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
