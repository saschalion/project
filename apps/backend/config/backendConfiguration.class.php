<?php


  class backendConfiguration extends sfApplicationConfiguration
{
  protected $frontendRouting = null;

  public function configure()
  {
  }

  public function generateFrontendUrl($name, $parameters = array())
  {
    return 'http://'.$_SERVER['HTTP_HOST'].$this->getFrontendRouting()->generate($name, $parameters);
  }

  public function getFrontendRouting()
  {
    if ($this->frontendRouting === null)
    {
      $this->frontendRouting = new sfPatternRouting(new sfEventDispatcher());

      $config = new sfRoutingConfigHandler();
      $routes = $config->evaluate(array(sfConfig::get('sf_apps_dir').'/frontend/config/routing.yml'));

      $this->frontendRouting->setRoutes($routes);
    }

    return $this->frontendRouting;
  }
}

