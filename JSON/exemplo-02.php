<?php

$json = '[{"nome":"Azevedo","idade":20},{"nome":"Bravoow","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>