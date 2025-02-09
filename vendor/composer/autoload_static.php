<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b3a4670316c91277b00f23472716e7a
{
    public static $files = array (
        '5ff9e52060a04b78334d6999b9cf9d4e' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tobimori\\Spielzeug\\' => 19,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tobimori\\Spielzeug\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'tobimori\\Spielzeug\\Menu' => __DIR__ . '/../..' . '/classes/Menu.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b3a4670316c91277b00f23472716e7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b3a4670316c91277b00f23472716e7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2b3a4670316c91277b00f23472716e7a::$classMap;

        }, null, ClassLoader::class);
    }
}
