<?php

$db_host = 'pixel.beget.ru';
$db_user = 'hipete_yprst';
$db_pass = '91115274234';
$db_database = 'hipete_yprst';

$link = mysql_connect($db_host, $db_user, $db_pass);

mysql_select_db($db_database, $link) or die ("Нет соединения с БД".mysql_error());
mysql_query("SET names UTF-8");

?>