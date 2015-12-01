<?php
// Required global constants.
define('NAMESPACE', '\\');

// Autoloader setup and configuration.
require_once('includes/Library/Origin/Autoload/Autoload.php');
spl_autoload_register('\Origin\Autoload\Autoload::Load');