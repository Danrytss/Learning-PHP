<?php
// funcoes anonimas

function test($callback) {

    //Processo lento

    $callback();

}

test(function() {

    echo "Finish!";
});


?>