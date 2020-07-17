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

        echo in_array('Uva', $lista_coisas['frutas']);
        echo '<br />';
        echo array_search('Banana', $lista_coisas['frutas']);

        echo '<hr />';
        
        $retorno = is_array($lista_coisas);
        echo $retorno;
    ?>
</body>
</html>