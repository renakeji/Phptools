<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62e1669b5ff2cc02f6cfbaa5f483bf79
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Renakeji\\Phptools\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Renakeji\\Phptools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Renakeji/Phptools',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62e1669b5ff2cc02f6cfbaa5f483bf79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62e1669b5ff2cc02f6cfbaa5f483bf79::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
