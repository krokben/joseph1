<?php

if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($_POST['name']) {
        echo "Tack för ert meddelande!";
    } else {
        echo "Tyvärr, där blev det något fel. Vänligen försök igen.";
    }

    mail("minheder@gmail.com", "Mail från " . $email, $message);
}

?>