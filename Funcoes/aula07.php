<?php

//funçoes recursivas

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor comercial
            array(
                'nome_cargo'=>'Diretor comercial',
                'subordinados'=> array(
                    array(
                    //Inicio: Gerente de vendas
                    'nome_cargo'=>'Gerente de vendas'
                    )
                )
                //Término: Gerente de vendas
            ),
            //Término: Diretor comercial
            //Inicio: Diretor financeiro
            array(
                'nome_cargo'=>'Diretor financeiro',
                'subordinados'=> array(
                    //Inicio:Gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados' => array(
                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de pagamentos'
                            )
                            //Término: Supervisor de pagamentos
                        )
                            ),
                     //Término: Gerente de contas a pagar
                     //Inicio: Gerente de compras
                     array(
                         'nome_cargo' => 'Gerente de compras',
                         'subordinados' => array(
                             array(
                                 //Inicio: Supervisor de suprimentos
                                 'nome_cargo' => 'Supervisor de suprimentos'
                             )
                             //Término: Supervisor de suprimentos
                         )
                         //Término: Gerente de compras
                     )
                )
               
            )
            //Término: Diretor financeiro

        )
    )
);

function exibe($cargos) {

    $html = "<ul>";

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo["nome_cargo"];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);
?>