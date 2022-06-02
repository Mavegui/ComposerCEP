<?php

require_once "vendor/autoload.php";
use Lord7\Comp\Search;

$busca = new Search;

$resultado = $busca-> getAddressFromZipcode('63250000');

print_r($resultado);
?>