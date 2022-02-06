<?php

$diaDaSemana = date ("w");

switch ($diaDaSemana) {

        case 0:
        echo "Domingo";
        break;

        case 1:
        echo "Segunda-Feira";
        break;

        case 2:
        echo "Terça-feira";
        break;

        case 3:
        echo "Quarta-feira";
        break;

        case 4:
        echo "Quinta-feira";
        break;

        case 5:
        echo "Sexta-feira";
        break;

        case 6:
        echo "Sábado";
        break;

        default:
        echo "Data inválida";
        break;

        //A declaração switch é similar a uma série de declarações IF na mesma expressão. Em muitos casos, se deseja comparar as mesmas variáveis (ou expressões), com diferentes valores, e executar pedaços diferentes de código dependendo de qual valor ela é igual. Esta é exatamente a serventia da declaração switch.
}