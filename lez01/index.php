<?php include "header.php"; ?>
<?php include "menu.php"; ?>
    <?php
        $pagina = 'home';
        //se la variabile passata nella query string della richiesta get è impostata
        if (isset($_GET['page'])){

            if ($_GET['page'] == 'pagina1'){
                //includi pagina 1
                include 'pagina1.php';
            }

            if ($_GET['page'] == 'pagina2'){
                //includi pagina 2
                include 'pagina2.php';
            }
        }
        else{
            //sei in home page
            echo "la variabile page non è settata e ti trovi in: " . $pagina;
        }
       

        // echo "funziona";
    ?>
<?php include "footer.php"; ?>


