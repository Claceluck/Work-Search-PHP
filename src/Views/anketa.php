<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/team.png" type="images/png">
    <title>Анкета</title>
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
            <h3 class="conteiner"> Заполните анкету </h3>
        </div>
    <form id="" name="" action="#" method="POST">
        <!-- Регистрация -->
        <fieldset>
            <h3>Для начала Зарегистрируемся:</h3>
            <div class="anketa">
                <label for="email">Email</label>
                <input class="required" minlength="6" type="email" id="email" required autocomplete="off" placeholder="Email..">
            </div>
            <div class="anketa">  
                <label for="psw">Пароль</label>
                <input class="required" minlength="6" type="password" id="psw" min="6" required autocomplete="off" placeholder="Пароль..">
            </div>
            <div class="anketa">
                <label for="psw-repeat">Повторите пароль</label>
                <input class="required" minlength="6" type="password" id="psw-repeat" min="6" required autocomplete="off" placeholder="Повторите пароль..">
            </div>
        </fieldset>
        <!-- Контактная информация -->
        <fieldset>
            <h3>Контактная информация:</h3>
            <div class="anketa">
                <label for="name">Имя</label>
                <input type="name" id="name"  autocomplete="off" placeholder="Имя..">
            </div>
            <div class="anketa"> 
                <label for="lastname">Фамилия</label>
                <input type="lastname" id="lastname" autocomplete="off" placeholder="Фамилия..">
            </div>
            <div class="anketa">
                <span>Пол</span>
                <label for="sex">
                    М
                <input type="radio" name="sex" id="sex">
                    Ж
                <input type="radio" name="sex" id="sex">
                </label>
            </div>
            <div class="anketa">
                <label for="age">Возраст</label>
                <input type="age" id="age"  autocomplete="off" placeholder="Возраст..">
            </div>
            <div class="anketa">
                <label for="phone">Моб.телефон</label>
                <input min="11" max="16" type="phone" id="phone"  autocomplete="off" placeholder="+7  - - -  - - -  - -  - - ">
            </div>
            <div class="anketa">
                <label for="cunty">Страна проживания</label>
                <input type="cunty" id="cunty"  autocomplete="off" placeholder="Страна..">
            </div>
            <div class="anketa">
                <label for="city">Город</label>
                <input type="city" id="city"  autocomplete="off" placeholder="Город..">
            </div>
        </fieldset>
        <fieldset>
            <h3>Владение иностранными языками:</h3>
            <div class="anketa">
                <label for="city">Язык </label>
                <input type="lang" id="lang"  autocomplete="off" placeholder="Введите через запятую..">
            </div>
            <div class="anketa">
                <p>Проходили ли Вы экзамен на знание  языка?</p>
                <div>
                <label>
                    Да
                <input type="radio" name="sex" value="female" required>
                    Нет
                <input type="radio" name="sex" value="man" required>
                </label>
                </div>
            </div>
            <div class="anketa">
                <label for="city"> Как вы оцениваете свои знания? </label>
            </div>
            <div class="anketa">    
                <label for="hear"> На слух: </label>
                <select name="hear" id="hear" size="1" >
                    <option value="1" selected> Не владею</option>
                    <option value="2">Начинающий</option>
                    <option value="3">Элементарный</option>
                    <option value="4">Средний</option>
                    <option value="5">Выше среднего</option>
                    <option value="6">Продвинутый</option>
                    <option value="7">Свободный</option>
                </select>
            </div>
            <div class="anketa">    
                <label for="read"> Чтение: </label>
                <select name="read" id="read" size="1" >
                    <option value="1" selected> Не владею</option>
                    <option value="2">Начинающий</option>
                    <option value="3">Элементарный</option>
                    <option value="4">Средний</option>
                    <option value="5">Выше среднего</option>
                    <option value="6">Продвинутый</option>
                    <option value="7">Свободный</option>
                </select>
            </div>
            <div class="anketa">    
                <label for="write"> Письмо: </label>
                <select name="write" id="write" size="1" >
                    <option value="1" selected> Не владею</option>
                    <option value="2">Начинающий</option>
                    <option value="3">Элементарный</option>
                    <option value="4">Средний</option>
                    <option value="5">Выше среднего</option>
                    <option value="6">Продвинутый</option>
                    <option value="7">Свободный</option>
                </select>
            </div>
            <div class="anketa">    
                <label for="speak"> Разговор: </label>
                <select name="speak" id="speak" size="1" >
                    <option value="1" selected> Не владею</option>
                    <option value="2">Начинающий</option>
                    <option value="3">Элементарный</option>
                    <option value="4">Средний</option>
                    <option value="5">Выше среднего</option>
                    <option value="6">Продвинутый</option>
                    <option value="7">Свободный</option>
                </select>
            </div>
        </fieldset>
        <fieldset>
            <h3>Ваше образование:</h3>
            <div class="anketa">
            </div>
                <div class="anketa">    
                    <label for="education"> Ваш уровень образования: </label>
                    <select name="education" id="education" size="1" >
                        <option value="1" selected> Среднее</option>
                        <option value="2">Среднее-профессиональное</option>
                        <option value="3">Бакалавриат</option>
                        <option value="4">Магистратура</option>
                        <option value="5">Асприрантура</option>
                        <option value="6">Докторантура</option>
                    </select>
                </div>
        </fieldset>
        <fieldset>
            <h3>Профессиональные навыки и опыт работы</h3>
            <div class="anketa"> 
            </div>
            <div class="anketa">
                <label for="prof">Ваша специальность / профессия? </label>
                <input type="prof" id="prof"  autocomplete="off" placeholder="Ваша специальность,профессия..">
            </div>
            <div class="anketa">
                <p>Имеете ли Вы опыт работы заграницей?</p>
                <label for="ex_work">
                    Да
                <input type="radio" name="ex_work" id="ex_work">
                    Нет
                <input type="radio" name="ex_work" id="ex_work">
                </label>
            </div>
        </fieldset>
        <fieldset>
            <h3>Дополнительная информация</h3>
            <p>Пожалуйста, укажите или предоставьте любую полезную, на Ваш взгляд, информацию:</p>
            <div class="anketa">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Укажите информацию здесь.."></textarea>
        </fieldset>
        <div>
            <input type="submit" value="Отправить">
        </div>
    </form>
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