<?php

$json = '[{"nome":"Daniel","idade":30},{"nome":"Tania","idade":32}]';

$data = json_decode($json, true);

var_dump ($data);

?>