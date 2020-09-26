<?php

session_start();

require_once 'config.php';
require_once 'helpers/system_helper.php';

 function __autoload($className){

    require_once 'lib/'.$className.'.php';

 }

?>