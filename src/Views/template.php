<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/static/img/team.png" type="images/png">
    <title><? echo $title; ?></title>
    <link rel="stylesheet" href="/static/css/style.css">
</head>
<body>
    <header>
        <a href="/" class="logo">Work & Travels</a>
        <nav>
          <ul class="topmenu">
                <? if (!isset($_SESSION['email'])): ?>
                <li><a href="/">Главная</a></li>
                <? else: ?>
                <? endif; ?>
                <li><a href="/news">Блог</a></li>
                <li><a href="" class="submenu-link">О нас</a>
                <ul class="submenu">
                    <li><a href="/blog">Новости</a></li>
                    <li><a href="#">Гид</a></li>
                </ul>
                </li>
                <? if (isset($_SESSION['email'])): ?>
                    <li><a href="/logout">Выйти</a></li>
                <? else: ?>
                    <li><a href="#auth">Вход</a></li>
                <? endif; ?>
                <? if (isset($_SESSION['email'])): ?>
                    <li><a href="/user-account/<?echo $_SESSION['email']?>">Личный кабиент</a></li>
                <? else: ?>
                <? endif; ?>
            </ul>
        </nav>
    </header>


<? include_once $content; ?>


  <!-- Футер -->
      <footer class=" footer flex_row conteiner_footer flex_column_xs ">
        <section>
            <h5 class="h_footer">Информация</h5>
            <nav class="flex_column">
               <a href="#">О нас</a>
               <a href="#">Правила сайта</a>
               <a href="#">Вакансии</a> 
            </nav>
        </section>
        <section>
            <h5 class="h_footer">Помощь</h5>
            <nav class="flex_column">
                <a href="#">Техподдержка</a>
            </nav>
        </section>
        <section>
            <h5 class="h_footer">Написать нам</h5>
            <nav class="flex_column">
                <a class="email" href="#">Work&Travels@mail.com</a>  
            </nav>
        </section>
        <section class="social">
            <h5 class="h_footer">Мы в соц.сетях</h5>
            <nav>
                <a class="facebook" href="#"></a>
                <a class="youtube" href="#"></a>
                <a class="twitter" href="#"></a>
                <a class="instagram" href="#"></a>
                <a class="linked" href="#"></a>
            </nav>
        </section>
        <section>
            <nav class="flex_row">
                <p>© 2020 Все права защищены!</p>
            </nav>
    </section>
    </footer>
    <!-- Модальное окно входа -->
    <section class="modal" id="auth">
        <form name="auth" class="flex-column">
            <h3>Войти на сайт</h3>
            <div class="form-row">
            <input name="email" type="email" id="email" required autocomplete="off">
                <label for="email">Email</label>
            </div>
            <div class="form-row">
                <input name="password" type="password" id="pwd" required autocomplete="off">
                <label for="pwd">Пароль</label>
            </div>
            <div>
                <label> Запомнить меня:
            <input type="checkbox" checked="checked" name="remember">
            </label>
            </div>
            <p><input type="submit" value="Войти"></p>
        </form>
        <a class="close-modal" href="#0">X</a>
    </section>
    <!-- общие js файлы -->
    <script src="/static/js/auth.js"></script>
</body>
</html>