<?php

require_once 'config/config.php';
  require_once 'helper/url_helper.php';
  require_once 'helper/session_helper.php';
// Autoload Core Library
spl_autoload_register(function($className){
require_once 'library/' .$className . '.php';
});


