<?php
if (isset($_get["nombre"])) {
    echo "Hola," .$_get["nombre"];
} else {
    echo "No se recibio ningun nombre";
}
?>