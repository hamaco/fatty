<?php

Router::connect(
  '/projects/:project_id/fatty/:action',
  array(
    'plugin' => 'Fatty',
    'controller' => 'Fatty'
  )
);
