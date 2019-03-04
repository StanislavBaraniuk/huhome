<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Ціни</title>
     <meta charset="utf-8">
     <meta name="format-detection" content="telephone=no" />
         <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThcDXCeI_ix2s5yfo1mCvSyybeYDlHH5wcFhXsxuuoHR8IXkWhqg">
         <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThcDXCeI_ix2s5yfo1mCvSyybeYDlHH5wcFhXsxuuoHR8IXkWhqg" />
     <link rel="stylesheet" href="css/style.css?<?echo time();?>">
         <link rel="stylesheet" href="css/superfish.css?<?echo time();?>">
         <link rel="stylesheet" href="css/grid.css?<?echo time();?>">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
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
            <div class="current"><a href="./index-3.php">Ціни</a></div>
            <div><a href="./index-4.php">Контакти</a></div>
        </div>
    </div>
</header>

<div class="alert" id="alert" style="visibility: hidden">
    <div class="modal-out">
    <div class="modal">
        <div class="modal-title">
            <h1>Замовлення</h1>
        </div>
        <div class="modal-form">
            <form action="./Scripts/createOrder.php" method="post">
                <input type="text" placeholder="Email" maxlength="50" minlength="5" class="modal-input" name="email" required="required">
                <div class="space_h"></div>
                <input type="text" placeholder="Телефон" maxlength="20" minlength="9" class="modal-input" name="phone" required="required">
                <div class="space_h"></div>
                <input type="text" placeholder="ПІБ" maxlength="50" minlength="10" class="modal-input" name="fio" required="required">
                <div class="space_h"></div>
                <input type="text" placeholder="Адреса" maxlength="40" minlength="5" class="modal-input" name="address" required="required">
                <div class="space_h"></div>

                <button type="submit" style="float: left">Надіслати</button>
                <button type="button" style="margin-left: 85px" onclick="closeModal()">Відмінити</button>
            </form>
        </div>
    </div>
    </div>
</div>
<!--=====================Content======================-->
<section class="content">
  <div class="flex-container">
    <div class="grid_10">
      <h4 class="head1">Список цін</h4>
      <div class="grid_5 alpha">
        <p class="color1">Будинки </p>
        <ul class="list2">
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Мийка вікон (вікно)</a></div>
            <div class="price">50 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Мийка полу (кімната)</a></div>
            <div class="price">100 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Прибирання пилу з освітлювальних приладів</a></div>
            <div class="price">50 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Сухе прибирання полів пилососом. (кімната)</a></div>
            <div class="price">100 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Винос сміття (до 5кг)</a></div>
            <div class="price">50 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Стірка</a></div>
            <div class="price">150 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Прибирання домашніх речей</a></div>
            <div class="price">100 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Прибирання пилу з розеток і вимикачів</a></div>
            <div class="price">50 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Генеральне прибирання санвузла</a></div>
            <div class="price">250грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Протирання дзеркал і скляних поверхонь</a></div>
            <div class="price">150 грн</div>
          </li>
        </ul>
      </div>
      <div class="grid_5 omega">
        <p class="color1">Офіси</p>
        <ul class="list2">
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Щоденне прибирання</a></div>
            <div class="price"></div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">Разове прибирання офісів</a></div>
            <div class="price"></div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">30-70(м2)</a></div>
            <div class="price">1400 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">70-110(м2)</a></div>
            <div class="price">2200 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">110-150(м2)</a></div>
            <div class="price">3000 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">110-150(м2)</a></div>
            <div class="price">4000 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">200-250(м2)</a></div>
            <div class="price">5000грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">250-300(м2)</a></div>
            <div class="price">6000 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">300-400(м2)</a></div>
            <div class="price">7600 грн</div>
          </li>
          <li>
            <div class="prod"><a onclick="openOrderFrame()">від 400(м2)</a></div>
            <div class="price">Договірна</div>
          </li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="grid_2">
      <h4 class="head2">Чому ми?</h4>
      <p class="color1"><a onclick="openOrderFrame()">Зручнсіть  </a></p>
      <p class="p1">Прибиремо будь яке приміщення швидко та якісно</p>
      <p class="color1"><a onclick="openOrderFrame()">Підтримка </a></p>
      <p class="p1">Підтримка для клієнтів працює 24/7</p>
      <p class="color1"><a onclick="openOrderFrame()">Комфорт  </a></p>
      Прибирання всії приміщень одним дзвінком <br>

    </div>
    <div class="clear"></div>
  </div>
    <div class="flex-container" style="margin-top: 50px">
        <button class="order-button" onclick="openOrderFrame()">Замовити прибирання</button>
    </div>
  <div class="sep__2"></div>
  <div class="flex-container">
    <div class="grid_8">
      <h3>Додаткові</h3>
      <ul class="list2">
        <li>
          <div class="prod"><a onclick="openOrderFrame()">Хімчистка</a></div>
          <div class="price"></div>
        </li>
        <li>
          <div class="prod"><a onclick="openOrderFrame()" style="padding-left: 50px">Ковролін</a></div>
          <div class="price">від 10 грн</div>
        </li>
        <li>
          <div class="prod"><a onclick="openOrderFrame()" style="padding-left: 50px">Дивани</a></div>
          <div class="price">60 грн</div>
        </li>
        <li>
          <div class="prod"><a onclick="openOrderFrame()" style="padding-left: 50px">Матраси</a></div>
          <div class="price">від 150 грн</div>
        </li>
        <li>
          <div class="prod"><a onclick="openOrderFrame()" style="padding-left: 50px">Офісні крісла</a></div>
          <div class="price">від 17 грн</div>
        </li>
        <li>
          <div class="prod"><a onclick="openOrderFrame()" style="padding-left: 50px">Килим</a></div>
          <div class="price">від 20 грн</div>
        </li>
        <li>
          <div class="prod"><a onclick="openOrderFrame()">Мийка автомобілів</a></div>
          <div class="price">500 грн</div>
        </li>
      </ul>
    </div>

    <div class="grid_4">
      <h3>Скидки</h3>
      <p class="color1"><a>Промокод </a></p>
      <p>За кожне використання наших послуг видаэться 5% промокод на наступне прибиирання</p>
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
            <a onclick="goToByScroll('top'); return false;" class="top"></a><br> <a class="f_logo main-logo"><img src="images/f_logo.png" alt=""></a>
          <div class="footer_socials">
            <a onclick="" class="fa fa-twitter"></a>
            <a onclick="" class="fa fa-facebook"></a>
            <a onclick="" class="fa fa-google-plus"></a>
            <a onclick="" class="fa fa-instagram"></a>
          </div>
      </div>
    </div>
  </div>  
  <div class="clear"></div>
</footer>


<script>
  function openOrderFrame() {
      document.getElementById('alert').style.visibility = 'visible';
  }

  function closeModal() {
      document.getElementById('alert').style.visibility = 'hidden';
  }
</script>

</body>
</html>

