<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b4da6b3eb67abc108f20a017f5bfeb1
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b4da6b3eb67abc108f20a017f5bfeb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b4da6b3eb67abc108f20a017f5bfeb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b4da6b3eb67abc108f20a017f5bfeb1::$classMap;

        }, null, ClassLoader::class);
    }
}
