<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "collecti_root", "marruecos2015", "collecti_test");

$result = $conn->query("SELECT * FROM postres");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Nombre":"'  . $rs["nombre"] . '",';
    $outp .= '"Precio":"'   . $rs["precio"]        . '",';
    $outp .= '"Stock":"'. $rs["stock"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>