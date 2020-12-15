<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>

</head>

<body>

    <?php

    if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
        $response = 'inserisci';
    } else {
        if (strlen($_GET['name']) > 3 && !is_numeric($_GET['name'])) {

            if (strpos($_GET['mail'], '@') || strpos($_GET['mail'], '.')) {

                if (is_numeric($_GET['age'])) {
                    $response = 'accesso';
                } else {
                    $response = 'eta non valida';
                }
            } else {
                $response = 'mail non valida';
            }
        } else {
            $response = 'nome breve o non consentito';
        }
    }

    ?>

    <a href="./?name=Mario&mail=mariorossi@mail.com&age=30">Completa</a>

    <p><?php echo $response; ?></p>
    
</body>
</html>