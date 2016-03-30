<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/03/16
 * Time: 11:29
 */

/**
 * register doctrine
 */

$app->register(new \Silex\Provider\DoctrineServiceProvider(),$config['db']);

/**
 *register doctrine orm
 */
$app->register(new \Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider(),$config['orm']);

/**
 * register twig
 */

$app->register(new \Silex\Provider\TwigServiceProvider(),$config['twig']);

/**
 * register monolog
 */
$app->register(new \Silex\Provider\MonologServiceProvider());

/**
 * register web profiler
 */

if($app['debug']){
    Symfony\Component\Debug\Debug::enable(E_ALL,true);
    $app->register(new \Silex\Provider\WebProfilerServiceProvider(),$config['profiler']);
}

/**
 * register form service
 */

$app->register(new \Silex\Provider\FormServiceProvider());

/**
 * register translation service
 */

$app->register (new \Silex\Provider\TranslationServiceProvider());

/**
 * register Session service
 */

$app->register(new \Silex\Provider\SessionServiceProvider());

/**
 * register Url generator Service
 */

$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());

/**
 * register Service Controller Service
 */

$app->register(new \Silex\Provider\ServiceControllerServiceProvider());

/**
 * register Http Fragment Service
 */

$app->register(new \Silex\Provider\HttpFragmentServiceProvider());

/**
 * register Validator Service
 */

$app->register(new \Silex\Provider\ValidatorServiceProvider());

/**
 *
 */

