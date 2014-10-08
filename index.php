<?php

// Project constants
define('PROJECT_NAME', 'blogi');
define('DEFAULT_CONTROLLER', 'posts');
define('DEBUG', false);

// Load app
require 'system/classes/Application.php';
$app = new Application;
