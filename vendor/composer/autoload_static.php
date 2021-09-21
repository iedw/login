<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4dd8d571e27e5ab5fd115a502f3a0939
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Conexao\\' => 8,
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Conexao\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Conexao',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Classes\\Usuario' => __DIR__ . '/../..' . '/Classes/Usuario.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Conexao\\Connection' => __DIR__ . '/../..' . '/Conexao/Connection.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4dd8d571e27e5ab5fd115a502f3a0939::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4dd8d571e27e5ab5fd115a502f3a0939::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4dd8d571e27e5ab5fd115a502f3a0939::$classMap;

        }, null, ClassLoader::class);
    }
}