<?php

for ($i = 0;/*valor inicial*/  $i <= 1000; /*valor final*/ $i ++) {

    if ($i >= 200 && $i <= 800) continue;
    if ($i === 901) break;

    echo $i . "<br>";
}

?>