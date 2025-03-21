<?php
    define('TITOLO', 'SASSO CARTA FORBICI');
    //la funzione isset() determina se una variabile è stata dichiarata oppure è NULL
    $sceltaUmano = isset($_GET['simbolo']) ? $_GET['simbolo'] : "";
    $sceltaMacchina = sceltaMacchina();
    function valuta($umano, $macchina){
        if($umano == $macchina){
            return 'Pareggio';
        }else{
            switch($umano){
                case 'SASSO':
                    if($macchina == 'FORBICI')
                        return "Vince umano";
                    else
                        return "Vince macchina";
                break;
                case 'FORBICI':
                    if($macchina == 'CARTA')
                        return "Vince umano";
                    else
                        return "Vince macchina";
                break;
                case 'CARTA':
                    if($macchina == 'SASSO')
                        return "Vince umano";
                    else
                        return "Vince macchina";
                break;
                default:
                    echo "Scelta invalida";
                    break;

            }
        }
    }

    function sceltaMacchina(){
        $casuale = rand(0,2);
        $scelta = "SASSO";
        if($casuale == 0){
            $scelta = "FORBICI";
        }elseif ($casuale == 1){
            $scelta = "CARTA";
        }else{
            $scelta = "SASSO";
        }
        return $scelta;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITOLO?></title>
</head>
<body>
    <h1><?=TITOLO?></h1>

    <ul>
        <li><a href="?simbolo=SASSO">SASSO</a></li>
        <li><a href="?simbolo=CARTA">CARTA</a></li>
        <li><a href="?simbolo=FORBICI">FORBICI</a></li>
    </ul>
    <h2>Umano gioca: <?= $sceltaUmano?></h2>
    <h2>Macchina gioca: <?= $sceltaMacchina?></h2>
    <h2><?= valuta($sceltaUmano,$sceltaMacchina)?></h2>

</body>
</html>