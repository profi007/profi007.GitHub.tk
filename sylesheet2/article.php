<DOCTYPE HTML>
<html>
<head>
<?php 
<?php reguire_onse "function/function.php"?>
$news = getNews(1, $_GET id);
$title=$news["title"];
reguire_onse "bocks/head.php";
?>
</head>
<body>
?php reguire_onse "bocks/header.php"?>
<div id="wrapper">
<div id="leftcol">
<?php 
 if(si == 0)
 echo "<div id=\"bigArticlet">";
 else
  echo "<div class=\"article\">";
 echo'<ing src="/img/articles/'.Snews  ["id"].'.jpg" alt="статья '.$Nevs["id"].'" title="Статья '.Snews["id"].'">
 <h2>'.$Nevs["title"].'</h2>
 <p>'.$Nevs["full_text"].'</p>
</div>
 ?>
</div> 
<?php reguire_onse "bocks/rightcol.php"?>
</div>
<?php reguire_onse "bocks/footer.php"?>
</body>
</html>