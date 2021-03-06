<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25217f75e3f03b7b4dac9e80c2b1a354
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25217f75e3f03b7b4dac9e80c2b1a354::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25217f75e3f03b7b4dac9e80c2b1a354::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit25217f75e3f03b7b4dac9e80c2b1a354::$classMap;

        }, null, ClassLoader::class);
    }
}
