<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3f8a4291b8b534079de2e5e44755dde
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'czhPackage\\package\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'czhPackage\\package\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/czhPackage/package',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3f8a4291b8b534079de2e5e44755dde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3f8a4291b8b534079de2e5e44755dde::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3f8a4291b8b534079de2e5e44755dde::$classMap;

        }, null, ClassLoader::class);
    }
}
