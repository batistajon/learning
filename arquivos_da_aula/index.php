<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
        //string
        $nome = 'Jon Batista';
        //int
        $idade = 31;
        //float
        $peso = 82.5;
        //boolean
        $fumante_sn = true; //true = 1 or false = 0
    ?>
    
    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
    


</body>

</html>