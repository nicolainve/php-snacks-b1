<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

</head>

<body>

    <?php

    if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
        $response = 'Inserisci i dati';
    } else {
        if (strlen($_GET['name']) > 3 && !is_numeric($_GET['name'])) {

            if (strpos($_GET['mail'], '@') || strpos($_GET['mail'], '.')) {

                if (is_numeric($_GET['age'])) {
                    $response = 'Accesso';
                } else {
                    $response = 'Età non valida';
                }
            } else {
                $response = 'Mail non valida';
            }
        } else {
            $response = 'Nome breve o non consentito';
        }
    }

    ?>

    <div id="app">
        <input type="text" v-model="name" placeholder="name">
        <input type="text" v-model="mail" placeholder="mail">
        <input type="text" v-model="age" placeholder="age">

        <a :href="'./?name=' + name + '&mail=' + mail + '&age=' + age">Inserisci</a>
    </div>


    <p><?php echo $response; ?></p>

    <!-- JS -->
    <script src="main.js"></script>
    
</body>
</html>