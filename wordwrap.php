<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>função wordwrap</title>
</head>
<body>
    <?php
        $t = "Aqui temos um texto gigante para mostrar o funcionamento da função wordwrap";
        $r = wordwrap($t, 20, "<br/>\n");
        echo "$r";
    ?>
</body>
</html>