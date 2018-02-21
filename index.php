<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Личный сайт</title>
    <style>
    
    </style>
    <script type="text/livescript" href="javascript2.js">
    </script>
       <script type="text/javascript">
           var counters = 0;
           function counter (el){
               counters++;
               el.innerHTML = "На этот текст навели " + counters + " раз";
           }
    </script>
</head>
<body alink='blue' link='black' vlink='black'>
  <header>
   <div>
    <a href="index.html">Главная</a>
    /
    <a href="2.html">Чат</a>
    /
    <a href="3.html">Регистрация</a>
     /
    <a href="S1.html">Терминал</a>
          /
      <a href="1.php">Проба PHP</a>
    </div>
    </header>
     <h1>Главная</h1>
    <noscript>Javascript no working</noscript>
    <div class="content"><img src="img/" alt="">
    <p>
    Добро пожаловать, вы можете пройти регистрацию и пользоваться чатом!
    <br>
    <br>
        <span onmouseover="counter(this)">На этот текст навели 0 раз</span>
        <br>
        <br>
    </p>
    </div>
    <footer>
        Copyright
    </footer>
</body>
</html>