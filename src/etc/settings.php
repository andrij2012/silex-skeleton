<?php

// Register Twig template engine
$this->app->register(new Silex\Provider\TwigServiceProvider(), array(
  'twig.path' => __ROOT__ . '/src/views'
));

// Enable debug settings
$this->app['debug'] = true;
$this->app['twig']->enableDebug();