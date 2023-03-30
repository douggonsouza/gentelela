<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit174f4cea62571bd2affc3a54a21e306d
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'douggonsouza\\propertys\\' => 23,
            'douggonsouza\\permission\\' => 24,
            'douggonsouza\\language\\' => 22,
            'douggonsouza\\gentelela\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'douggonsouza\\propertys\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/propertys/src',
        ),
        'douggonsouza\\permission\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/permission/src',
        ),
        'douggonsouza\\language\\' => 
        array (
            0 => __DIR__ . '/..' . '/douggonsouza/language/src',
        ),
        'douggonsouza\\gentelela\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'douggonsouza\\gentelela\\alerts' => __DIR__ . '/../..' . '/src/alerts.php',
        'douggonsouza\\gentelela\\alertsInterface' => __DIR__ . '/../..' . '/src/alertsInterface.php',
        'douggonsouza\\gentelela\\assets\\assets' => __DIR__ . '/../..' . '/src/assets/assets.php',
        'douggonsouza\\gentelela\\behaviorInterface' => __DIR__ . '/../..' . '/src/behaviorInterface.php',
        'douggonsouza\\gentelela\\benchmarck' => __DIR__ . '/../..' . '/src/benchmarck.php',
        'douggonsouza\\gentelela\\benchmarckInterface' => __DIR__ . '/../..' . '/src/benchmarckInterface.php',
        'douggonsouza\\gentelela\\blocks\\blocks' => __DIR__ . '/../..' . '/src/blocks/blocks.php',
        'douggonsouza\\gentelela\\controls\\alert' => __DIR__ . '/../..' . '/src/controls/alert.php',
        'douggonsouza\\gentelela\\identify' => __DIR__ . '/../..' . '/src/identify.php',
        'douggonsouza\\language\\language' => __DIR__ . '/..' . '/douggonsouza/language/src/language.php',
        'douggonsouza\\language\\languageInterface' => __DIR__ . '/..' . '/douggonsouza/language/src/languageInterface.php',
        'douggonsouza\\permission\\controls\\menus' => __DIR__ . '/..' . '/douggonsouza/permission/src/controls/menus.php',
        'douggonsouza\\permission\\controls\\papers' => __DIR__ . '/..' . '/douggonsouza/permission/src/controls/papers.php',
        'douggonsouza\\permission\\controls\\permissions' => __DIR__ . '/..' . '/douggonsouza/permission/src/controls/permissions.php',
        'douggonsouza\\permission\\controls\\permissions_types' => __DIR__ . '/..' . '/douggonsouza/permission/src/controls/permissions_types.php',
        'douggonsouza\\permission\\controls\\sidebar' => __DIR__ . '/..' . '/douggonsouza/permission/src/controls/sidebar.php',
        'douggonsouza\\permission\\models\\menu' => __DIR__ . '/..' . '/douggonsouza/permission/src/models/menu.php',
        'douggonsouza\\permission\\models\\paper' => __DIR__ . '/..' . '/douggonsouza/permission/src/models/paper.php',
        'douggonsouza\\permission\\models\\permission' => __DIR__ . '/..' . '/douggonsouza/permission/src/models/permission.php',
        'douggonsouza\\permission\\models\\permission_type' => __DIR__ . '/..' . '/douggonsouza/permission/src/models/permission_type.php',
        'douggonsouza\\permission\\permission' => __DIR__ . '/..' . '/douggonsouza/permission/src/permission.php',
        'douggonsouza\\propertys\\propertys' => __DIR__ . '/..' . '/douggonsouza/propertys/src/propertys.php',
        'douggonsouza\\propertys\\propertysInterface' => __DIR__ . '/..' . '/douggonsouza/propertys/src/propertysInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit174f4cea62571bd2affc3a54a21e306d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit174f4cea62571bd2affc3a54a21e306d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit174f4cea62571bd2affc3a54a21e306d::$classMap;

        }, null, ClassLoader::class);
    }
}
