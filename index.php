<?php

error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("vovanches/vovanchesExeption.php");
include_once("vovanches/Linear.php");
include_once("vovanches/Quadratic.php");
include_once("vovanches/Log.php");

vovanches\Log::log(123123123);
vovanches\Log::log(123123213);
vovanches\Log::write();
?>
