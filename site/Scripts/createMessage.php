<?php

    require_once '../Helper/EmailSender.php';
    require_once '../Helper/DB.php';
    require_once '../config/config.php';
    require_once '../config/config.php';

    $send_to_admin = require_once '../Helper/eTemplates/messageToAdmin.php';
    $send_to_user = require_once '../Helper/eTemplates/messageToUser.php';

    $count = (new DB)->query("SELECT COUNT(id) FROM messages")[0]['COUNT(id)'];

    EmailSender::send(SERVICE_EMAIL, ADMIN_EMAIL, $_POST["name"], "Повідомлення №".($count+1), $send_to_admin);
    EmailSender::send(SERVICE_EMAIL, $_POST["email"], SERVICE_NAME, "Повідомлення №".($count+1), $send_to_user);

    (new DB)->query("INSERT INTO messages (`id`, `message`, `name`, `email`, `phone`, `created_at`) VALUES ('0', '" . $_POST['message'] ."', '" . $_POST['name'] ."', '" . $_POST['email'] ."', '" . $_POST['phone'] ."', '" . date('Y-m-d H:i:s') ."')");

    header("Location: ". SERVICE_LINK);