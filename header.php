<header>
<div id="logo" itemscope itemtype="http://schema.org/Organization">
<a itemprop="url" href="http://yprst.ru/">
<img itemprop="logo" src="http://yprst.ru/img/logo.png" width="139" height="49" alt="Ёпрст — сайт с бесплатными книгами, скачивайте и читайте книжные бестселлеры и новинки совершенно бесплатно!"/>
</a>
</div>

<form action="search?q=">
<input type="search" name="q" placeholder="Поиск книг" autocomplete="off">
<button type="submit"></button>
</form>
    <nav>
       <ul>
        <?php
        
        $result = mysql_query("SELECT name, id FROM genres",$link);

        
        if (mysql_num_rows($result) > 0)
        {
            
            $row = mysql_fetch_array($result);
            
            do {
                
                echo '<li><a href="books?genre='.$row["id"].'"'.(($genre==$row["id"]) ? "style='color: #000;padding:1px 6px;border-radius:20px;border:2px solid #ff1212;margin:0 -8px;'" : "").'>'.$row["name"].'</a></li>';
                     
            
            }
        
                while ($row = mysql_fetch_array($result));
        }
        


?>


    </ul>
    </nav>
</header>