<?php
namespace AndriiValkiv\Example\Controller;

use \Silex\Application;
use \Symfony\Component\HttpFoundation\Request;

class MainController
{
  /**
   * Index action
   *
   * @param Request     $request
   * @param Application $app
   * @return mixed
   */
  public function index(Request $request, Application $app)
  {
    return $app['twig']->render('example.twig');
  }
}