<?php
ini_set("display_errors", 1);
error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("vovanches/vovanchesExeption.php");
include_once("vovanches/Linear.php");
include_once("vovanches/Quadratic.php");
include_once("vovanches/Log.php");
$co_arr = [];
foreach (["a", "b", "c"] as $co) {
    echo "Enter " . $co . ": ";
    $line = stream_get_line(STDIN, 1024, PHP_EOL);
    $co_arr[$co] = $line === "" ? 0 : $line;
}
$a = $co_arr["a"];
$b = $co_arr["b"];
$c = $co_arr["c"];
//vovanches\Log::log("Entered numbers: " . implode(", ", $co_arr));

try {
    vovanches\Log::log("Equation: $a*x^2 + $b*x + $c = 0");
    $solver = new vovanches\Quadratic($a, $b, $c);
    vovanches\Log::log("Roots: " . implode(", ", $solver->solve($a, $b, $c)));
} catch (vovanches\vovanchesExeption  $ex) {
    vovanches\Log::log($ex->getMessage());
}
vovanches\Log::write();
?>
