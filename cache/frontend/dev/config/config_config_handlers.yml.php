<?php
// auto-generated by sfRootConfigHandler
<<<<<<< HEAD
// date: 2011/03/30 17:29:00
=======
// date: 2011/03/26 12:55:30
>>>>>>> ec27b1c97778c436fba45a676ab851b3ad70cb2c

$this->handlers['config/autoload.yml'] = new sfAutoloadConfigHandler();
$this->handlers['config/databases.yml'] = new sfDatabaseConfigHandler();
$this->handlers['config/settings.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'sf_',
));
$this->handlers['config/app.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'app_',
));
$this->handlers['config/factories.yml'] = new sfFactoryConfigHandler();
$this->handlers['config/core_compile.yml'] = new sfCompileConfigHandler();
$this->handlers['config/filters.yml'] = new sfFilterConfigHandler();
$this->handlers['config/routing.yml'] = new sfRoutingConfigHandler();
$this->handlers['modules/*/config/generator.yml'] = new sfGeneratorConfigHandler();
$this->handlers['modules/*/config/view.yml'] = new sfViewConfigHandler();
$this->handlers['modules/*/config/security.yml'] = new sfSecurityConfigHandler();
$this->handlers['modules/*/config/cache.yml'] = new sfCacheConfigHandler();
$this->handlers['modules/*/config/module.yml'] = new sfDefineEnvironmentConfigHandler(array (
  'prefix' => 'mod_',
  'module' => true,
));
