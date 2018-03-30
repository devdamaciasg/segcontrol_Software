<?php

$total = round(disk_free_space("/") / 1024 / 1024 / 1024);
print("Espacio Disponible en el servidor: $total GB");
/* Imprimira Espacio Disponible en el servidor: 26 GB por ejemplo. */
?>
