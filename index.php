<?php 

function generatePasswrod($len_password) {
    $password = '';
    //tutti i caratteri possibili per generare la password
    $caratteri_password = 'ABCDEFGHIJKLMNOPQRSTVWXYZabcdefghijklmnopqrstvwxyz1234567890.:,;-_@#&/()[]!?*'; 

    for ($i = 0; $i < $len_password; $i++ ) {
        //numero randomico per scegliere a caso un carattere
        $Nrand = rand(0, strlen($caratteri_password) - 1);
        //aggiungo a password un carattere randomico
        $password .= $caratteri_password[$Nrand];
    }
    return $password;
}


// controllo se la lunghezza è stata impostata
if(!empty($_GET['lenght-password'])){
    $lunghezza_password;
    //controllo lunghezza password
    if(intval($_GET['lenght-password']) <= 8 || intval($_GET['lenght-password']) > 64 ) {$lunghezza_password = 8;}
    else {$lunghezza_password = intval($_GET['lenght-password']);}
    // echo 'lunghezza settata:' . $lunghezza_password;

    // genero la password e la assegno a una variabile
    $password = generatePasswrod($lunghezza_password);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>
</head>
<body>
    <header>
        <h1>GENERATORE DI PASSWORD</h1>
    </header>
    <main>
        <div>
            <form action="index.php" method=""GET>
                <label for="lenght-password">lunghezza della password (min 8 max 64)</label>
                <input type="number" id="lenght-password" name="lenght-password" placeholder="inserisci un numero">
                <input type="submit" value="Genera password">
            </form>
        </div>
        <!-- stampo solo se la password è stata creata (cioè quando è più lunga di 8 caratteri) -->
        <?php if(strlen($password) >= 8): ?>
        <hr>
        <div>
            <div>password generata: <b><?php echo $password; ?> </b></div>
        </div>
        <?php endif; ?>
    </main>
</body>
</html>
