<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Jorge Sant Ana</title>
</head>
<body>
    <?php
        //
        $usuario_possui_cartao = true;
        $valor_compra = 50;

        $valor_frete = 50;
        $recebeu_desc_frete = true;

        if($usuario_possui_cartao && $valor_compra >= 400) {
            $valor_frete = 0;
          
        } elseif($usuario_possui_cartao && $valor_compra >= 300) {
            $valor_frete = 10;
            
        } elseif($usuario_possui_cartao && $valor_compra >= 100) {
            $valor_frete = 25;

        } else {    
            $recebeu_desc_frete = true;
        } 
    ?>

    <h1>Detalhes do pedido.</h1>

    <p>Possui cartão da loja? <?= $usuario_possui_cartao ? 'Sim' : 'Não' ?>

    <?php
        /*if($usuario_possui_cartao) {
            echo 'Sim';
        } else {
            echo 'Não';
        }*/
    ?>
    </p>

    <p>O valor da compra foi <?= $valor_compra ?></p>

        <p>Recebeu desconto no frete?
            <?php

                $teste = $recebeu_desc_frete ? 'Sim' : 'Não';
 
                echo $teste;

                /*
                if($recebeu_desc_frete){
                    echo 'Sim';
                } else {
                    echo 'Não';
                }*/
            ?>
        
        </p>

          <p>O valor do frete foi <?= $valor_frete ?></p>      
</body>
</html>