<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit7988c3e2ea75df4a5864e9be7b615321
=======
class ComposerAutoloaderInitd209fce2ae1416a584a431cbbb2d45ec
>>>>>>> a5e5d31453fc2a150f2be0e13d76a2f027b5596b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit7988c3e2ea75df4a5864e9be7b615321', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit7988c3e2ea75df4a5864e9be7b615321', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInitd209fce2ae1416a584a431cbbb2d45ec', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitd209fce2ae1416a584a431cbbb2d45ec', 'loadClassLoader'));
>>>>>>> a5e5d31453fc2a150f2be0e13d76a2f027b5596b

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit7988c3e2ea75df4a5864e9be7b615321::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInitd209fce2ae1416a584a431cbbb2d45ec::getInitializer($loader));
>>>>>>> a5e5d31453fc2a150f2be0e13d76a2f027b5596b
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInit7988c3e2ea75df4a5864e9be7b615321::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInitd209fce2ae1416a584a431cbbb2d45ec::$files;
>>>>>>> a5e5d31453fc2a150f2be0e13d76a2f027b5596b
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequire7988c3e2ea75df4a5864e9be7b615321($fileIdentifier, $file);
=======
            composerRequired209fce2ae1416a584a431cbbb2d45ec($fileIdentifier, $file);
>>>>>>> a5e5d31453fc2a150f2be0e13d76a2f027b5596b
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire7988c3e2ea75df4a5864e9be7b615321($fileIdentifier, $file)
=======
function composerRequired209fce2ae1416a584a431cbbb2d45ec($fileIdentifier, $file)
>>>>>>> a5e5d31453fc2a150f2be0e13d76a2f027b5596b
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
