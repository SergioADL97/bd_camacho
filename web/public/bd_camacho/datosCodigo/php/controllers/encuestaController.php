<?php

// eliminar alertas de errores
error_reporting(0);
// incluimos el modelo
require_once("../models/Encuesta.php");
// instanciamos el modelo
$encuestaModel = new Encuesta();

echo $encuestaModel->encuesta( $_POST );