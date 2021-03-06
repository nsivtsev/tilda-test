<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ada5d3b83f3c7c96462e436e73fe732
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Generators\\UniqueNumsGenerator' => __DIR__ . '/../..' . '/src/Generators/UniqueNumsGenerator.php',
        'App\\Services\\MatrixService' => __DIR__ . '/../..' . '/src/Services/MatrixService.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ada5d3b83f3c7c96462e436e73fe732::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ada5d3b83f3c7c96462e436e73fe732::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ada5d3b83f3c7c96462e436e73fe732::$classMap;

        }, null, ClassLoader::class);
    }
}
