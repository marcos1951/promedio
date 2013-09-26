<html>
<head> </head>

<body>
<?php

require_once ("2.php");
$ventas= array(8.5,5.5,6.3,6.8,8.2,8.9,10.0,5.9,9.4,9.0,5.6,7.5,7.9,8.3,9.6,9.9,8.8,7.0,7.5,10.0);

$promedio = new promedio();
$promedio->imprimePromedio($ventas);
?>
</body>
</html>