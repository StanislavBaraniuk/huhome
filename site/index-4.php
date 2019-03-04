<?php
    require_once './config/config.php'
?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contacts</title>
     <meta charset="utf-8">
     <meta name="format-detection" content="telephone=no" />
         <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThcDXCeI_ix2s5yfo1mCvSyybeYDlHH5wcFhXsxuuoHR8IXkWhqg">
         <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThcDXCeI_ix2s5yfo1mCvSyybeYDlHH5wcFhXsxuuoHR8IXkWhqg" />
         <link rel="stylesheet" href="css/slippry.css?<?echo time();?>">
         <link rel="stylesheet" href="css/elastislide.css?<?echo time();?>" />
         <link rel="stylesheet" href="css/style.css?<?echo time();?>">
         <link rel="stylesheet" href="css/superfish.css?<?echo time();?>">
         <link rel="stylesheet" href="css/grid.css?<?echo time();?>">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/TMForm.js"></script>
     <script>
    function goToByScroll(id){$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');}
     </script>


    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
     </head>
     <body class="" id="top">
<!--==============================header=================================-->
<header>
  <div class="container_12">
            <div class="grid_12">
                      <h1>
          <a href="../index.php">
            <img src="images/logo.png" alt="Your Happy Family" class="main-logo">
          </a>
        </h1>

    </div>
  </div>
  <div class="clear"></div>
    <div class="menu_block">
        <div class="flex-container menu">
            <div><a href="/index.php">Головна</a></div>
            <div><a href="./index-2.php">Послуги</a></div>
            <div><a href="./index-3.php">Ціни</a></div>
            <div class="current"><a href="./index-4.php">Контакти</a></div>
        </div>
    </div>
</header>

<!--=====================Content======================-->
<section class="content">
  <div class="flex-container">
    <div class="grid_5">
      <h4>Як нас знайти</h4>
            <div class="map">
            <figure class="">
                <iframe  src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=%D0%A3%D0%B6%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%2C%20%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </figure>
           <p>Підтримка працює 24/7<span class="color1"></p>
                <?php echo SERVICE_NAME; ?>
                <br>
                <?php echo SERVICE_ADDR; ?>
                <br>
           Телефоон: <?php echo SERVICE_PHONE; ?><br>
           FAX: <?php echo SERVICE_FAX; ?><br>
           E-mail: <a href="#"><?php echo ADMIN_EMAIL; ?></a>
          </div>
    </div>
    <div class="grid_6 prefix_1">
<!--        <form action="./Scripts/createMessage.php"></form>-->
      <h3>Звяжіться з нами</h3>
        <form class="message-form" method="post" action="./Scripts/createMessage.php">
            <input type="text" required="required" name="name" placeholder="ПІБ">
            <input type="email" required="required" name="email" placeholder="E-mail">
            <input type="text" required="required" name="phone" placeholder="Телефон">
            <textarea name="message" required="required" placeholder="Повідомлення"></textarea>
            <button type="submit">Надіслати</button>
        </form>
<!--      <form id="form" method="post" action="./Scripts/createMessage.php">-->
<!--      <div class="success_wrapper">-->
<!--      <div class="success-message">Contact form submitted</div>-->
<!--      </div>-->
<!--      <label class="name">-->
<!--      <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" name="name"/>-->
<!--      <span class="empty-message">*This field is required.</span>-->
<!--      <span class="error-message">*This is not a valid name.</span>-->
<!--      </label>-->
<!--      <label class="email">-->
<!--      <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" name="email"/>-->
<!--      <span class="empty-message">*This field is required.</span>-->
<!--      <span class="error-message">*This is not a valid email.</span>-->
<!--      </label>-->
<!--       <label class="phone">-->
<!--          <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers" name="phone"/>-->
<!--          <span class="empty-message">*This field is required.</span>-->
<!--          <span class="error-message">*This is not a valid phone.</span>-->
<!--          </label>-->
<!--      <label class="message">-->
<!--      <textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)' name="message"></textarea>-->
<!--      <span class="empty-message">*This field is required.</span>-->
<!--      <span class="error-message">*The message is too short.</span>-->
<!--      </label>-->
<!--      <div>-->
<!--      <div class="clear"></div>-->
<!--      <div class="btns">-->
<!--      <a href="#" data-type="reset" class="link1">clear</a>-->
<!--      <button type="submit" class="link1">send</button></div>-->
<!--      </div>-->
<!--      </form id="form">-->
    </div>
    <div class="clear"></div>
  </div>
</section>
<!--==============================Bot_block=================================-->
<!--==============================footer=================================-->
<footer>
  <div class="container_12">
    <div class="row">
      <div class="">
            <a href="#" onclick="goToByScroll('top'); return false;" class="top"></a><br> <a href="#" class="f_logo main-logo"><img src="images/f_logo.png" alt=""></a>
          <div class="footer_socials">
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google-plus"></a>
            <a href="#" class="fa fa-instagram"></a>
          </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</footer>
</body>
</html>

