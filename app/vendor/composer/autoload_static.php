<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit272312b480a0c766be4d6915efcc4623
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit272312b480a0c766be4d6915efcc4623::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit272312b480a0c766be4d6915efcc4623::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit272312b480a0c766be4d6915efcc4623::$classMap;

        }, null, ClassLoader::class);
    }
}
