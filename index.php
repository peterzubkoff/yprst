<?php include("db_connect.php");?>
<!DOCTYPE html> 
<html lxmlns:og="http://ogp.me/ns#" prefix="ya: http://webmaster.yandex.ru/vocabularies/" lang="ru">

<head>
<meta charset="UTF-8">
<title>Ёпрст — электронная библиотека: скачать и читать бесплатно книги в форматах pdf, fb2, epub, txt, на телефон и планшет</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<meta name ="title" content="Ёпрст — электронная библиотека: скачать и читать бесплатно книги в форматах pdf, fb2, epub, txt, на телефон и планшет">
<meta name="description" content="Электронные книги без регистрации для телефона, планшета и компьютера. Бестселлеры, новинки, популярные авторы, лучшие книги с рецензиями и рейтингами. Тут есть книги по бизнесу, здоровью, психологии, компьютеру, искусству, праву и школьные учебники на iPad" />
<meta name="keywords" content="электронные книги бесплатно без регистрации для телефона планшета бестселлеры новинки учебники fb2 pdf epub txt" />

<link rel="canonical" href="http://yprst.ru/">
<meta name="Robots" content="index, follow">
<meta name="google-site-verification" content="kREha7XDUtwJDszvQGS9abRe30M_S9fEYxU1phlpEdc" />
<link rel="search" type="application/opensearchdescription+xml" title="Ёпрст" href="yprstsearch.xml">
<link rel="yandex-tableau-widget" href="yandex-tableau-widget.json">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/social-likes_classic.css">

<meta property="og:title" content="Электронная библиотека &quot;Ёпрст&quot;">
<meta property="og:description" content="Здесь можно скачать книжные бестселлеры и новинки совершенно бесплатно!">
<meta property="og:url" content="http://yprst.ru/">
<meta property="og:image" content="http://yprst.ru/img/og_img.jpg">
<meta property="og:site_name" content="Labirint.ru">

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
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>

<div class="wrapper">
<?include("header.php");?>
<div id="head">
        <h1>Сайт с бесплатными книжками в формате <mark class="pdf">ПДФ</mark></h1>
        <h2>Ёпрст, теперь можно скачать и читать бестселлеры и новинки совершенно бесплатно!</h2>
          <div class="social-likes social-likes_light" data-counters="no">
          <div class="twitter" title="Поделиться ссылкой в Твиттере">Twitter</div>
          <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
          <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>
          <div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
          <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
          <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
</div>
</div>
<main>
<ul class="grid">
<h3>Бестселлеры и новинки</h3>
<?php
        
        $result = mysql_query("SELECT id, title, autor, rating FROM books",$link);
        
        if (mysql_num_rows($result) > 0)
        {
            
            $row = mysql_fetch_array($result);
            
            do {
                
                echo '
            <li>
            <a href="book?id='.$row["id"].'">
                <img src="cover/'.$row["id"].'.jpg" width="100px" height="135px" alt="Скачать «'.$row["title"].'» бесплатно и без регистрации в pdf" title="Скачать «'.$row["title"].'» бесплатно и без регистрации в pdf">
                '.$row["title"].'
                </a>
            <small><a href="search?q='.$row["autor"].'">'.$row["autor"].'</a></small>
            <span class="rating">
              <span class="rating_inner" style="width:calc('.$row["rating"].'*15px)"></span>
            </span>
            </li>
                ';
            
            }
        
                while ($row = mysql_fetch_array($result));
        }
        
        ?>
</ul>
<aside>
<div id="book_of_the_day">
<h4>КНИГА ДНЯ</h4>
   <li>
            <a href="book?id=13">
                <img src="cover/13.jpg" width="100px" height="135px" alt="Скачать «Русская канарейка. Желтухин» бесплатно и без регистрации в pdf" title="Скачать «Русская канарейка. Желтухин» бесплатно и без регистрации в pdf">
                Русская канарейка. Желтухин
                </a>
            <small><a href="search?q=Дина Рубина">Дина Рубина</a></small>
            </li>
</div>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 1, width: "210", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 86039680);
</script>
<div class="fbook">
<div class="fb-page" data-href="https://www.facebook.com/yprst.ru" data-width="210" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/yprst.ru"><a href="https://www.facebook.com/yprst.ru">Facebook</a></blockquote></div></div>
</div>
</aside>
</main>
</div>
<?include("footer.php");?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/social-likes.min.js"></script>
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