<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27d7d01c86b301ce97ad9b9350eef635
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27d7d01c86b301ce97ad9b9350eef635::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27d7d01c86b301ce97ad9b9350eef635::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}