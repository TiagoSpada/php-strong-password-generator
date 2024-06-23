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
