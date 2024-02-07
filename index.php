
<?php

require("house.php");
for ($i=1; $i<10; $i++) {
    $crib = new House(random_int(1, 20),random_int(1, 20),random_int(1, 20),random_int(1, 20),random_int(1, 20));
    echo $crib->getHouse();
    echo "<hr>";

}

?>