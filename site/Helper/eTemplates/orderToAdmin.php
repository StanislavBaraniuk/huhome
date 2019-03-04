<?php

return '

<html>
    <head>
    </head>
    <body style="display: flex; flex-wrap: wrap; padding: 10px">
    <div style="width: calc(50% - 5px);">
        <div style="padding: 10px; background-color: whitesmoke; margin-top: 10px">
        Name:
            <span>'. $_POST["fio"]  . '</span>
        </div>
        <div style="padding: 10px; background-color: whitesmoke; margin-top: 10px">
        Email:
            <span>'. $_POST["email"]  . '</span>
        </div>
        <div style="padding: 10px; background-color: whitesmoke; margin-top: 10px">
        Phone:
            <span>'. $_POST["phone"]  . '</span>
        </div>
        <div style="padding: 10px; background-color: whitesmoke; margin-top: 10px">
        Address:
            <span>'. $_POST["address"]  . '</span>
        </div>
        <div style="padding: 10px; background-color: whitesmoke; margin-top: 10px">
        Time:
            <span>'. date('Y-m-d H:i:s') . '</span>
        </div>
    </div>
    <div style="width: calc(50% - 5px);  margin-left: 5px; margin-top: 10px; text-align: center; color: #a2a2a2; font-size: 25rpx; font-weight: bold; letter-spacing: 2px; line-height: 220px">
        CLEAN YOUR HOME <span style="font-size: 10px">ORDER</span>
    </div>    
    </body>
</html>
    
    
';