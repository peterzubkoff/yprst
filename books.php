<?php

include("db_connect.php");
include("escaping.php");

$genre = (int) clear_string($_GET['genre']);
$name_result = mysql_query("SELECT id, name FROM genres WHERE id = '$genre'",$link);

if (mysql_num_rows($name_result) > 0) {
    $genre_name = mysql_fetch_array($name_result);
}
else{
      header ("HTTP/1.1 404 Not Found");
      include("error.php");
      exit();
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ёпрст — книги скачать бесплатно и без ригистрации</title>

  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/books.css">
</head>
<body>
<div class="wrapper">
<?include("header.php");?>
<main>
<div id="breadcrumbs">
<ul itemscope itemtype="http://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="/">
    <span itemprop="name">Главная</span></a>
    <meta itemprop="position" content="1" />
  </li> › 
  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
    <a itemprop="item" href="books?genre=<? echo $genre_name["id"] ?>">
    <span itemprop="name"><? echo $genre_name["name"] ?></span></a>
    <meta itemprop="position" content="2" />
  </li>
</ul>
</div>
<h1><? echo $genre_name["name"] ?></h1>

<ul class="grid">
    <?php
        
        $result = mysql_query("SELECT id, title, autor,rating FROM books WHERE genre=$genre",$link);
        
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