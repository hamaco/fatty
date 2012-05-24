<?php

Configure::write('Fatty.log_limit', 20);
Configure::write('Fatty.git_path', '/usr/bin/git');
Configure::write('Fatty.git_dir', ROOT . '/.git');

$menuContainer = ClassRegistry::getObject('MenuContainer');
$menuContainer->addProjectMenu(
  'fatty',
  array(
    'plugin'     => 'Fatty',
    'controller' => 'Fatty',
    'action'     => 'index',
    'class'      => '',
    'caption'    => 'Fatty',
    'params'     => 'project_id',
    '_allowed'   => true,
  )
);

CakePlugin::loadAll(
  array(
    'Fatty' => array('routes' => true)
  )
);

$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('fatty','0.1');
