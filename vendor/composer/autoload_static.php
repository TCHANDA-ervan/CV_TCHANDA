<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbb26b5bcfa10a22604326dd9ac0a5df
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'InvertColor\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'InvertColor\\' => 
        array (
            0 => __DIR__ . '/..' . '/villfa/invert-color/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbb26b5bcfa10a22604326dd9ac0a5df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbb26b5bcfa10a22604326dd9ac0a5df::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbb26b5bcfa10a22604326dd9ac0a5df::$classMap;

        }, null, ClassLoader::class);
    }
}
