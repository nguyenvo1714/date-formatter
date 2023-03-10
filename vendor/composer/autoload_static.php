<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit471a70beac0ed399dfba8ebc04e026ad
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nguyenvc\\DateFormatter\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nguyenvc\\DateFormatter\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit471a70beac0ed399dfba8ebc04e026ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit471a70beac0ed399dfba8ebc04e026ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit471a70beac0ed399dfba8ebc04e026ad::$classMap;

        }, null, ClassLoader::class);
    }
}
