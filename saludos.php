<?php
    echo "<h1>Me has pedido que te salude " . $_GET['num'] . " veces</h1>";
    if ( $_GET['num'] == 42){
        echo "<p>En realidad, esa es la respuesta a la pregunta final sobre la vida, el univefso y todo lo demás.</p>";
    }
    else {
        for ($i = 0; $i < $_GET['num']; $i++) {
            echo $i . " - Hola mundo<br>";
        }
    }
?>