<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>

<body>
    <?php
        $registros = array(
        array('titulo' => 'Título notícia 1', 'conteudo' => 'conteudo 1'),
        array('titulo' => 'Título notícia 2', 'conteudo' => 'conteudo 2') ,
        array('titulo' => 'Título notícia 3', 'conteudo' => 'conteudo 3'),
        array('titulo' => 'Título notícia 3', 'conteudo' => 'conteudo 4'),
    );

        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br />';
        
        $idx = 0;

        echo '<h2>O array possui: ' . count($registros) . ' registros.</h2>';

        echo '<br />';

        while($idx < count($registros)) {
          
          echo '<h3>'. $registros[$idx]['titulo'] . '</h3>';
          echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

          echo '<hr />';
          
          $idx++;
        }
    ?>
</body>

</html>