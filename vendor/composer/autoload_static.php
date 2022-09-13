<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79e43dc91f16023f46bd19a3e6b1b925
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79e43dc91f16023f46bd19a3e6b1b925::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79e43dc91f16023f46bd19a3e6b1b925::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79e43dc91f16023f46bd19a3e6b1b925::$classMap;

        }, null, ClassLoader::class);
    }
}