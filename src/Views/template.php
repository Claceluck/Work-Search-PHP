<!DOCTYPE html>
<html lang="en">
head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/team.png" type="images/png">
    <title><? echo $title; ?></title>
    <!-- Объщие js библиотеки подключаем в тэге head -->
    <link rel="stylesheet" href="/static/css/style.css">
    <!-- Объщие css библиотеки подключаем в тэге head --> -->
</head>
<body>
    <header>
        <a href="main.html" class="logo">Work & Travels</a>
        <nav>
          <ul class="topmenu">
            <li><a href="/">Главная</a></li>
            <li><a href="/news">Новости</a></li>
            <li><a href="" class="submenu-link">О нас</a>
              <ul class="submenu">
                <li><a href="/blog">Блог</a></li>
                <li><a href="">Гид</a></li>
              </ul>
            </li>
            <li><a href="#auth">Вход</a></li>
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
    <!-- общие js файлы -->
    <!-- <script src="/static/js/"></script> -->
</body>
</html>