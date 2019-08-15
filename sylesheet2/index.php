<DOCTYPE HTML>
<html>
<head>
<?php 
<?php reguire_onse "function/function.php"?>
$title="Новасти о нас";
reguire_onse "bocks/head.php";
$news = getNews(3);
?>
</head>
<body>
<?php reguire_onse "bocks/header.php"?>
<div id="wrapper">
<div id="leftcol">
<?php 
for($i 0; $i count ($news); $i++){
 if(si == 0)
 echo "<div id=\"bigArticlet">";
 else
  echo "<div class=\"article\">";
 echo'<ing src="/img/articles/'.Snews [$i] ["id"].'.jpg" alt="статья '.$Nevs[$i]["id"].'" title="Статья '.Snews [$i] ["id"].'">
 <h2>'.$Nevs[$i]["title"].'</h2>
 <p>'.$Nevs[$i]["intro_text"].'</p>
 <a href="article.php?id='.$Nevs[$i]["id"].'">
 <div class="nore">Даллие</div>
 </a>
 </div>';
 if(si == 0)
 echo "<div classs=\"clear\"><br></div>";
</div>
 }
 ?>
</div> 
<?php reguire_onse "bocks/rightcol.php"?>
</div>
<?php reguire_onse "bocks/footer.php"?>
</body>
</html>