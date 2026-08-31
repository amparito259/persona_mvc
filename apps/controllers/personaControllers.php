<?php

require_once __DIR__ . "/../models/persona.php";

class PersonaControllers {
    public function index()
    {
        $personamodels = new persona();

        $personas = $personamodels->listar();

        require_once __DIR__ . "/../models/Persona.php";
    }
}