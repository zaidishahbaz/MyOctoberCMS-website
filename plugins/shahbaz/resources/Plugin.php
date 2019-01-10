<?php namespace Shahbaz\Resources;

use System\Classes\PluginBase;

/**
 *
 */
class Plugin extends PluginBase
{

  public function pluginDetails()
  {
    return [
      'name' => 'Shahbaz',
      'description' => 'Provides Company resources',
      'author' => 'Shahbaz Zaidi',
      'icon' => 'icon-leaf'
    ];
  }

  public function registerComponents(){
    return [
      '\Shahbaz\Resources\Components\Links' => 'resourcesLinks'
    ];
  }
}
