<?php include './script01.php'; ?>
<?php include './script02.php'; ?>
<?php include './script03.php'; ?>
<?php include './script04.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITOLO?></title>
</head>
<body>
    <h1><?= TITOLO ?></h1>
    <ul>

        <?php
            foreach ($linguaggi as $linguaggio) {
                echo '<li>' . $linguaggio . '</li>';
            }    
        ?>

    </ul>
    <p>
        <?php
            echo addizione(7,8);
        ?>
    </p>
    <?=procedura()?>
</body>
</html>

