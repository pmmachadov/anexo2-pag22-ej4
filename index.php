<!-- 4.- Crea una página que muestre mediante código PHP una tabla con un rango de
temperaturas de 0ºC a 100ºC ordenados en intervalos de 10ºC. Los valores deben
aparecer con un fondo de un determinado color en función de las siguientes
condiciones:
 Los valores comprendidos entre 0 y 20ºC aparecen en azul.
 Los valores comprendidos entre 20 y 60ºC aparecen en verde.
 Los valores comprendidos entre 60 y 80ºC aparecen en amarillo.
 Los valores comprendidos entre 80 y 90ºC aparecen en naranja
 El valor 100ºC aparece en rojo.  -->

<?php
$temperaturas = array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
$color = array("blue", "green", "yellow", "orange", "red");
echo "<table border=1>";
echo "<tr><th>Temperatura</th><th>Color</th></tr>";
for ($i = 0; $i < count($temperaturas); $i++) {
if ($temperaturas[$i] == 0) {
echo "<tr><td>" . $temperaturas[$i] . "</td><td bgcolor=" . $color[0] . ">" . $color[0] . "</td></tr>";
} elseif ($temperaturas[$i] > 0 && $temperaturas[$i] < 20) {
echo "<tr><td>" . $temperaturas[$i] . "</td><td bgcolor=" . $color[0] . ">" . $color[0] . "</td></tr>";
} elseif ($temperaturas[$i] >= 20 && $temperaturas[$i] < 60) {
echo "<tr><td>" . $temperaturas[$i] . "</td><td bgcolor=" . $color[1] . ">" . $color[1] . "</td></tr>";
} elseif ($temperaturas[$i] >= 60 && $temperaturas[$i] < 80) {
echo "<tr><td>" . $temperaturas[$i] . "</td><td bgcolor=" . $color[2] . ">" . $color[2] . "</td></tr>";
} elseif ($temperaturas[$i] >= 80 && $temperaturas[$i] < 90) {
echo "<tr><td>" . $temperaturas[$i] . "</td><td bgcolor=" . $color[3] . ">" . $color[3] . "</td></tr>";
} elseif ($temperaturas[$i] == 100) {
echo "<tr><td>" . $temperaturas[$i] . "</td><td bgcolor=" . $color[4] . ">" . $color[4] . "</td></tr>";
}
}
echo "</table>";
