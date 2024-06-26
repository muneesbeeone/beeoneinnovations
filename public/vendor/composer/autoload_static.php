<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit640af7e1ea2b8579ca4f5cf276bec47f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit640af7e1ea2b8579ca4f5cf276bec47f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit640af7e1ea2b8579ca4f5cf276bec47f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit640af7e1ea2b8579ca4f5cf276bec47f::$classMap;

        }, null, ClassLoader::class);
    }
}
