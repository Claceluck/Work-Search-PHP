<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/team.png" type="images/png">
    <title>Блог</title>
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
            <h3 class="conteiner"> Блог </h3>
        </div>

        <div class="blog_block blog_block_xm blog_block_xs">
            <div>
                <h3>Минимальная зарплата в Канаде. Чего ждать в 2020 году?</h3>
                <h4>Автор:<a class="avtor" href="#">Иван Лосев </a> | 04.12.2014</h4>
                <img class="blog_img" src="https://picsum.photos/700">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa sit provident natus magnam dolore harum quasi fugiat dicta sequi fugit?</p>
                <a class="read_later" href="#"> <span>Читать дальше...</span></a>
            </div>
            <div>
                <h3>Минимальная зарплата в Канаде. Чего ждать в 2020 году?</h3>
                <h4>Автор:<a class="avtor" href="#">Иван Лосев </a> | 04.12.2014</h4>
                <img class="blog_img" src="https://picsum.photos/700">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa sit provident natus magnam dolore harum quasi fugiat dicta sequi fugit?</p>
                <a class="read_later" href="#"> <span>Читать дальше...</span></a>
            </div>
            <div>
                <h3>Минимальная зарплата в Канаде. Чего ждать в 2020 году?</h3>
                <h4>Автор:<a class="avtor" href="#">Иван Лосев </a> | 04.12.2014</h4>
                <img class="blog_img" src="https://picsum.photos/700">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa sit provident natus magnam dolore harum quasi fugiat dicta sequi fugit?</p>
                <a class="read_later" href="#"> <span>Читать дальше...</span></a>
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