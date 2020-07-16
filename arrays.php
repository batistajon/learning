<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <?php
        $lista_coisas = [];

        $lista_coisas['frutas'] = array('Banana', 'Maçã', 'Morango', 'Uva');

        $lista_coisas['pessosas'] = ['joao', 'jose', 'maria'];
        
        echo '<pre>;';
        print_r($lista_coisas);
        echo '</pre>';
    ?>
</body>
</html>