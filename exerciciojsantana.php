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
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desc_frete = false;

        if($usuario_possui_cartao == true && $valor_compra >= 100) {
            $valor_frete = 0;
            $recebeu_desc_frete = true;
        }
    ?>

    <h1>Detalhes do pedido.</h1>

    <p>Possui cartão da loja?
    <?php
        if($usuario_possui_cartao == true) {
            echo 'Sim';
        } else {
            echo 'Não';
        }
    ?>
    </p>

    <p>O valor da compra foi <?= $valor_compra ?></p>

        <p>Recebeu desconto no frete?
            <?php
                if($recebeu_desc_frete == true){
                    echo 'Sim';
                } else {
                    echo 'Não';
                }
            ?>
        
        </p>

          <p>O valor do frete foi <?= $valor_frete ?></p>      
</body>
</html>