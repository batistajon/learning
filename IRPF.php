<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRPF</title>
</head>
<body>
    <?php

        function calcularIrpf($salario) {

            $aliquota = 0;

            if( $salario <= 1903.98 ) {
                $aliquota = 0;
          
            } elseif($salario >= 1903.99 && $salario <= 2826.65) {
                $aliquota = ($salario * 7.5) / 100;
            
            } elseif($salario >= 2826.66 && $salario < 3751.05) {
                $aliquota = ($salario * 15) / 100;
                
            } elseif($salario >= 3751.51 && $salario <=4664.08) {
                $aliquota = ($salario * 22.5) / 100;
           
            } else {
                $aliquota = ($salario * 27.5) / 100;
            
            }

            return $aliquota;
        }   
        
        echo calcularIrpf(2000);
    ?>

    
</body>
</html>