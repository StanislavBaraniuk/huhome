<?php

    return '

<html>
    <head>
    </head>
    <body style="padding: 10px">
    <div style=" ">
        <div style="padding: 10px; background-color: whitesmoke; margin-top: 10px; ">
            <div>Привіт, '. $_POST["name"]  . '</div>
            <div>Вами було надіслано повідомлення до <a href="'. SERVICE_LINK .'">'. SERVICE_NAME .'</a>. Менеджер надасть Вам відповідь в найближчий час.</div>
        </div>
    </div>
    <div style="  margin-left: 5px; margin-top: 10px; text-align: center; color: #a2a2a2; font-size: 25rpx; font-weight: bold; letter-spacing: 2px;">
        CLEAN YOUR HOME
    </div>    
    </body>
</html>
    
    
';