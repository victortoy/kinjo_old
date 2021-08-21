<?php
require "../controllers/".$_REQUEST['objeto'].".php";
$objeto = new $_REQUEST['objeto']();
$respuesta = $objeto->{$_REQUEST['metodo']}($_REQUEST['parametros']);
echo json_encode($respuesta);