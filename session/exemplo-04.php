<?php

session_id('kkjv2pudl1mn612gu5tpi379vo');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>