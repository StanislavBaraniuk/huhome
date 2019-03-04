<?php

    require_once '../Helper/EmailSender.php';
    require_once '../Helper/DB.php';
    require_once '../config/config.php';
    require_once '../config/config.php';

    $send_to_admin = require_once '../Helper/eTemplates/orderToAdmin.php';
    $send_to_user = require_once '../Helper/eTemplates/orderToUser.php';

    $count = (new DB)->query("SELECT COUNT(id) FROM orders")[0]['COUNT(id)'];

    EmailSender::send(SERVICE_EMAIL, ADMIN_EMAIL, $_POST["fio"], "Замовлення №".($count+1), $send_to_admin);
    EmailSender::send(SERVICE_EMAIL, $_POST["email"], SERVICE_NAME, "Замовлення №".($count+1), $send_to_user);

    (new DB)->query("INSERT INTO orders (`id`, `name`, `address`, `created_at`, `phone`, `email`) VALUES ('0', '" . $_POST['fio'] ."', '" . $_POST['address'] ."', '" . date('Y-m-d H:i:s') ."', '" . $_POST['phone'] ."', '" . $_POST['email'] ."' )");

    header("Location: ". SERVICE_LINK);