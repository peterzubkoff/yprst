<?php

include("db_connect.php");
include("escaping.php");

$book_id = (int) clear_string($_GET['id']);

$result = mysql_query("SELECT * FROM books WHERE id = $book_id LIMIT 1",$link);
 
if (mysql_num_rows($result) > 0) {
    $row = mysql_fetch_array($result);
}
else{
      header ("HTTP/1.1 404 Not Found");
      include("error.php");
      exit();
}

$genre = $row["genre"];

$genrem_result = mysql_query("SELECT name FROM genres WHERE id = '$genre'",$link);
$genrem_mark_row = mysql_fetch_array($genrem_result);

$genre_name = $genrem_mark_row["name"];


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Скачать «<?=$row["title"]?>» бесплатно и без регистрации в pdf</title>
  
  <title>Дмитрий Глуховский: книга Метро 2035, скачать книгу в fb2, txt, epub, pdf или читать онлaйн, 978-5-17-090538-6</title><meta name="description" content="В электронной библиотеке ЛитРес можно скачать книгу «Метро 2035» в форматах fb2, txt, epub, pdf, а также скачать другие книги Дмитрия Глуховского! Отставляете и читайте отзывы о книге на ЛитРес!">

  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/book.css">
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

<script type="text/javascript">
  VK.init({apiId: 4985848, onlyWidgets: true});
</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4&appId=1443940199248628";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="wrapper">
<header>
<div id="logo" itemscope itemtype="http://schema.org/Organization">
<a itemprop="url" href="http://yprst.ru/">
<img itemprop="logo" src="http://yprst.ru/img/logo.png" width="139" height="49" alt="Ёпрст — сайт с бесплатными книгами, скачивайте и читайте книжные бестселлеры и новинки совершенно бесплатно!"/>
</a>
</div>

<form action="search.php?q=">
<input type="search" name="q" placeholder="Поиск книг" autocomplete="off">
<button type="submit"></button>
</form>
    <nav>
       <ul>
        <?php
        
        $genre_result = mysql_query("SELECT id, name FROM genres",$link);

        
        if (mysql_num_rows($genre_result) > 0)
        {
            
            $genre_row = mysql_fetch_array($genre_result);
             
      
            do {
                
                echo '<li><a href="books?genre='.$genre_row["id"].'"'.(($genre == $genre_row["id"]) ? "style='border-bottom-color:rgba(232, 14, 14, 0.35);color:#E80E0E'" : "").'>'.$genre_row["name"].'</a></li>';
                     
            
            }
            while ($genre_row = mysql_fetch_array($genre_result));

        }
        


?>


    </ul>
    </nav>
</header>
<main>
<div itemscope="" itemtype="http://schema.org/Book">
   <meta itemprop="bookFormat" content="EBook/DAISY3"/>
   <meta itemprop="accessibilityFeature" content="largePrint/CSSEnabled"/>
   <meta itemprop="accessibilityFeature" content="highContrast/CSSEnabled"/>
   <meta itemprop="accessibilityFeature" content="resizeText/CSSEnabled"/>
   <meta itemprop="accessibilityFeature" content="displayTransformability"/>
   <meta itemprop="accessibilityFeature" content="longDescription"/>
   <meta itemprop="accessibilityFeature" content="alternativeText"/>
   <meta itemprop="accessibilityControl" content="fullKeyboardControl"/>
   <meta itemprop="accessibilityControl" content="fullMouseControl"/>
   <meta itemprop="accessibilityHazard" content="noFlashing"/>
   <meta itemprop="accessibilityHazard" content="noMotionSimulation"/>
   <meta itemprop="accessibilityHazard" content="noSound"/>
   <meta itemprop="accessibilityAPI" content="ARIA"/>
<div id="book_cover">
<div class="pluso" style="display:scroll; position:absolute; top:3px; left:3px;" data-background="transparent" data-options="medium,square,line,vertical,nocounter,theme=04" data-services="vkontakte,facebook,twitter,odnoklassniki,google,moimir"></div>
<img src="cover_big/<?=$book_id?>.jpg" width="320" height="435" alt="Скачать «<?=$row["title"]?>» бесплатно и без регистрации в pdf" title="Скачать «<?=$row["title"]?>» бесплатно и без регистрации в pdf">
</div>
<section id="book_details">
<div id="breadcrumbs">
<ul itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="/">
    <span itemprop="name">Главная</span></a>
    <meta itemprop="position" content="1" />
  </li> › 
 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="books?genre=<?=$genre?>">
    <span itemprop="name"><?=$genre_name?></span></a>
    <meta itemprop="position" content="2" />
  </li> › 
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="search?q=<?=$row["autor"]?>">
    <span itemprop="name"><?=$row["autor"]?></span></a>
    <meta itemprop="position" content="3" />
  </li>
</ul>
</div>
<h1 itemprop="name">
  <?=$row["title"]?>
<span class="rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
  <span itemprop="ratingValue" class="rating_inner" style="width:calc(<?=$row["rating"]?>*15px)"><?=$row["rating"]?></span>
</span>
</h1>
<a itemprop="author" href="search?q=<?=$row["autor"]?>" id="author"><?=$row["autor"]?></a>
<div class="container">
  <button class="btn primary_btn">Скачать бесплатно в <span class="smallcapitals">ПДФ</span></button>
<!--<button class="btn default_btn">Купить на Лабиринте</button>-->
<!--  <a href="#" class="small" target="_blank">Краткое содержание на брифли</a>-->
<!--</div>-->
<table>
  <caption>Выходные данные</caption>
  <tbody>
    <tr>
      <th>Время чтения</th>
      <td>≈ <?=$row["time"]?> часа</td>
    </tr>
    <tr>
      <th>Объём</th>
      <td><span itemprop="numberOfPages"><?=$row["pages"]?></span> страниц</td>
    </tr>
    <tr>
      <th>Возрастное ограничение</th>
      <td><?=$row["age"]?>+</td>
    </tr>
    <tr>
      <th>Издательство</th>
      <td itemprop="publisher"><span itemprop="name"><?=$row["publisher"]?></span></td>
    </tr>
    <tr>
      <th>Издание</th>
      <td><span itemprop="bookEdition"><?=$row["edition"]?></span> г.</td>
    </tr>
    <tr>
      <th>ISBN</th>
      <td itemprop="isbn"><?=$row["isbn"]?></td>
    </tr>
        <tr>
      <th>Жанр</th>
      <td><span itemprop="genre"><?=$genre_name?></span></td>
    </tr>
  </tbody>
</table>
</section>
<div id="book_desc">
<h2>ОПИСАНИЕ КНИГИ</h2>
<p itemprop="description"><?=nl2br($row["description"]);?></p>
</div>
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
</div>
</main>
</div>
<?include("footer.php");?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter27905568 = new Ya.Metrika({id:27905568,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27905568" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>