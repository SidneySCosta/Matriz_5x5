<?php

$rota = "matrixController";

if (array_key_exists("rota", $_GET)) {
	$rota = (string) $_GET["rota"];
}
if (is_file("controller/{$rota}.php")) {
	require "controller/{$rota}.php";
} else {
	echo "Rota não encontrada";
}
