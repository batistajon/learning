<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função printf</title>
</head>
<body>
    <?php
        $p = leite;
        $pr = 7;

        //echo "o $p custa R$ " . number_format($pr,2);

        printf("O %s custa R$ %.2f", $p, $pr);
        
    ?>
</body>
</html>