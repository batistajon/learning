<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de sangue</title>
</head>
<body>
    <?php
       $idade= 18;
       $peso= 70;

       if ($idade <= 16 && $idade >= 69 || $peso < 50) {
            echo "Não atende aos requisitos.";
        } else {
            echo "Atende aos requisitos.";
        }          


        

    ?>
</body>
</html>