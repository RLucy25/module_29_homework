<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta http-equiv="content-type" content="text/html"; charset="utf-8"> 
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<title>Главная</title> 
<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="./css/styles.css">
<script src="/JS/jquery-1.6.2js" type="text/javascript"></script> 
<script type="text/javascript">
function random(number) {
    return Math.floor(Math.random()*(number+1));
};
$(document).ready(function() {
    var quotes = $('.quote');
    quotes.hide();
    var qlen = quotes.length;
    $('.quote:eg('+ random(qlen-1)+')').show();
});
</script>
</head> 
<body>
    <div id="wrapper">
        <div id="header">
            <div id="logo">
        <img class="log" src="./Images/logo.jpg" align-"left">
            </div>
            <div id="menu">
                <ul>
                    <li class="first active"><a href="index.php?url=main">Главная</a></li>
                    <li><a href="index.php?url=services">Услуги</a></li>
                    <li><a href="index.php?url=portfolio">Портфолио</a></li>
                    <li><a href="index.php?url=contacts">Контакты</a></li>
                </ul>
                <br class="clearfix"/>
            </div>
        </div>
        <div id="page">
            <div id="sidebar">
                <div class="side-box">
                    <h3> Цитата:</h3>
                   <p align="justity" class="quote">
                    "Сайт, как живой организм, изменяется и развивается.
                    Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия"
                </p> 
               
                    <h1>Основное меню</h1>
                    <ul class="list">
                        <li class="first"><a href="index.php?url=main">Главная</a>
                        <li><a href="index.php?url=services">Услуги</a></li>
                        <li><a href="index.php?url=portfolio">Портфолио</a></li>
                        <li><a href="index.php?url=contacts">Контакты</a></li>
                    </ul>
            </div>
        </div>

        <div id="content">
         <div class="box">
    <?php include $content_view; ?>
              </div>
              <br class="clearfix"/>
      </div>
      <br class="clearfix"/>
      </div>
</body> 
<div class="footer">
            <h2>Я изучаю PHP!</h2>
        </div>
<script src="./js/script01.js"></script>
</html>