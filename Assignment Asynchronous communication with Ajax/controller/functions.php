<?php

    function email_validation($email){
    $emailValid = true;
    $emailsCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.@';

        for ($i = 0; $i < strlen($email); $i++) {
            if (strpos($emailsCharacters, $email[$i]) === false) {
                $emailValid = false;
                
            }
        }
    if (!$emailValid) {
        return false;
    }

    }
?>