<?php
namespace AndriiValkiv\Example;

/**
 * Class Bootstrap
 *
 * @package AndriiValkiv\Generator
 * @author Andrii Valkiv
 */
class Bootstrap
{
  /**
   * @var Bootstrap
   */
  protected static $instance = null;

  /**
   * @var array
   */
  protected $config = [];

  /**
   * @var \Silex\Application
   */
  protected $app;

  /**
   * Constructor
   */
  private function __construct() {}

  /**
   * Run the bootstrap process of the application
   * Define constants, settings etc.
   * Main point in index.php
   *
   * @return void
   */
  public static function run()
  {
    if (self::$instance === null) {
      self::$instance = new Bootstrap();
    }

    self::$instance->app = new \Silex\Application();

    self::$instance->defineConstants();
    self::$instance->includeSettingsAndRoutes();

    self::$instance->app->run();
  }

  /**
   * Define the constants
   *
   * @return void
   */
  protected function defineConstants()
  {
    define('__ROOT__', realpath(__DIR__ . '/../..'));
  }

  /**
   * Include routes
   *
   * @return void
   */
  protected function includeSettingsAndRoutes()
  {
    require_once __ROOT__ . '/src/etc/settings.php';
    require_once __ROOT__ . '/src/etc/routes.php';
  }
}