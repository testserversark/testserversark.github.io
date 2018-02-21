<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="javascript2.js">
    <meta charset="UTF-8">
    <title>Личный сайт</title>
    <script type="text/javascript"> 
    function valid(form){
        var name= form.name.value;
        var fail = false;
       var password = form.password.value;
        var repassword = form.RePassword.value;
        var state = form.state.value;
        
          if(state == "")
            fail = "Укажите пол";
        
       if (password != repassword)
           fail = "Пароли не совпадают";
        
        if (repassword == "")
            fail = "Введите пароль еще раз"
        
          if (password == "")
            fail = "Вы не ввели пароль";
     
         if(name == "" || name == " ")
            fail = "Вы не ввели свое имя";
        
      
        
        if (fail)
            alert(fail); 
     
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
     <h1>Регистрация</h1>
    <div class="content"><img src="img/" alt="">
    <p>
       <form action="" method="post" id="form" name="test"  class="form1">
           <label for="name">Имя:</label>
           <input type="text" name="name" placeholder="Имя" id="name" /><br /><br />
           <label for="password">Пароль:</label>
            <input type="password" name="password" placeholder="Пароль" id="password" /><br /><br />
            <label for="RePassword">Проверка пароля:</label>
            <input type="password" name="RePassword" placeholder="Введите пароль" id="RePassword" /><br /><br />
            <span>Пол:</span>
            <input type="radio" name="state" id="male" value="Мужской" /><label for="male">Мужской</label>
            <input type="radio" name="state" id="female" value="Женский" /><label for="female">Женский</label><br /><br />
            <input type="button" name="submit" value="Готово" onclick="valid(document.getElementById('form'))" />

       </form>
        <br />
        <br />
    </p>
    </div>
    <footer>
        Copyright
    </footer>
</body>
</html>