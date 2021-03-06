<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit482db77ad591cf6b4862c41843ab8804
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MP3File\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MP3File\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'MP3File\\MP3File' => __DIR__ . '/../..' . '/src/class.mp3file.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit482db77ad591cf6b4862c41843ab8804::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit482db77ad591cf6b4862c41843ab8804::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit482db77ad591cf6b4862c41843ab8804::$classMap;

        }, null, ClassLoader::class);
    }
}
