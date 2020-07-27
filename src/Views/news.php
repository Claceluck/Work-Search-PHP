<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/team.png" type="images/png">
    <title>Новости</title>
</head>
<body>
    <header>
        <a href="main.html" class="logo">Work & Travels</a>
        <nav>
          <ul class="topmenu">
            <li><a href="main.html">Главная</a></li>
            <li><a href="news.html">Новости</a></li>
            <li><a href="" class="submenu-link">О нас</a>
              <ul class="submenu">
                <li><a href="blog.html">Блог</a></li>
                <li><a href="">Гид</a></li>
              </ul>
            </li>
            <li><a href="#auth">Вход</a></li>
          </ul>
        </nav>
      </header>
    <aside id="vertical_nav">
        <!-- Левая колонка  -->
    </aside>
    <main>
        <!-- Основной контент -->
        <div class="info_buton conteiner">
            <h3 class="story_header">Новости</h3>
        <div class="conteiner story_block story_block_xm story_block_xs">
            <div class="story_block_1 story_block_1_xs">
                <img class="story_img" src="/img/new_germ.jpg" alt="#">
                <div>
                <h3>Устроиться на работу в Германии будет проще</h3>
                <p>Германии не хватает квалифицированных специалистов. Новый закон должен облегчить трудоустройство кадров не из ЕС. В Берлине обсудили, как его применять на практике...</p>
                 <a class="read_later" href="#"> <span>Читать дальше...</span></a>
                </div>
            </div>
            <div class="story_block_1 story_block_1_xs">
                <img class="story_img" src="/img/usa_work.jpg" alt="#">
                <div>
                <h3>Как устроиться на работу в США и виды рабочих виз</h3>
                <p>Несмотря на всю привлекательность трудовой миграции в США, большинству иностранных соискателей сделать это не так-то просто. В том числе сложности в поиске работы возникают и у граждан постсоветского пространства. Одним из главных условий для успешного трудоустройства будет владение английским языком на хорошем уровне. Работа в США без знания языка — это неудачная затея, которая с малой долей вероятности воплотится в жизнь, а тем более принесет существенный доход...</p>
                 <a class="read_later" href="#"> <span>Читать дальше...</span></a>
                </div>
            </div>
        </div>
    </main>
    <aside id="info_block">
        <!-- Правая колонка -->
    </aside>
    <footer class="flex_row conteiner flex_column_xs ">
        <!-- Футер -->
        <section>
            <h5>Информация</h5>
            <nav class="flex_column">
               <a href="#">О нас</a>
               <a href="#">Правила сайта</a>
               <a href="#">Вакансии</a> 
            </nav>
        </section>
        <section>
            <h5>Помощь</h5>
            <nav class="flex_column">
                <a href="#">Техподдержка</a>
            </nav>
        </section>
        <section>
            <h5>Написать нам</h5>
            <nav class="flex_column">
                <a class="VK" href="#">@mail</a>  
            </nav>
        </section>
        <section class="social">
            <h5>Мы в соц.сетях</h5>
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
        <form class="flex-column" name="auth" action="#" method="post">
            <h3>Войти на сайт</h3>
            <div class="form-row">
                <input type="text" id="email" required autocomplete="off">
                <label for="email">Email</label>
            </div>
            <div class="form-row">
                <input type="password" id="password" required autocomplete="off">
                <label for="password">Пароль</label>
            </div>
            <div>
                <label> Запомнить меня:
            <input type="checkbox" checked="checked" name="remember">
                </label>
            </div>
            <p><input type="submit" value="Войти"></p>
            <!-- <p><input type="submit" value="Зарегистрироваться"></p> -->
            <!-- <div class="form-row"> -->
            <!-- <label> Запомнить меня:
            <input type="checkbox" checked="checked" name="remember">
            </label>
            </div> -->
        </form>
        <a class="close-modal" href="#0">X</a>
    </section>
</body>
</html>