<?php
require "../controllers/".$_REQUEST['objeto'].".php";
$objeto = new $_REQUEST['objeto']();
echo json_encode($objeto->{$_REQUEST['metodo']}($_REQUEST['parametros']));