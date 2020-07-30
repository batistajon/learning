<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php
            $premio = array();

            while(count($premio) <= 5) {
                $num = rand(1, 60);
                    if(!in_array($num, $premio)) {
                        $premio[] = $num;
                    }
            }

            print_r($premio);
    ?>
</body>
</html>