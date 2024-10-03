<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        function scegliColore($inizialeColore){
            switch($inizialeColore){
                case "b":
                    $colore="blue";
                    break;
                case "w":
                    $colore="white";
                    break;
            
                case "r":
                    $colore="red";
                    break;
                case "y":
                    $colore="yellow";
                    break;
                case "g":
                    $colore="green";
                    break;
                default:
                    $colore="black";
                    break;

            }
            return $colore;

        }
        $lettera="g";
        $colore=scegliColore("g");
        echo "<p style='color:$colore'>Questo paragrafo ha la proprietà color con valore $colore</p>";
    ?>
    
</body>
</html>