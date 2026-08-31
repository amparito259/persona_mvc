<?php
require_once __DIR__ . "/../apps/models/persona.php";

$persona = new Persona();
$personas = $persona->listar();

print_r($personas);