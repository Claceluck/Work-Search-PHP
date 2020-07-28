<main>
    <!-- Основной контент -->
    <div class="info_buton conteiner">
        <h3 class="conteiner"> Заполните анкету </h3>
    </div>
	<form id="" name="" action="/registration" method="POST"> 
		<!-- Регистрация --> 
		<fieldset> 
			<h3>Для начала Зарегистрируемся:</h3> 
			<div class="anketa"> 
				<label for="email">Email</label> 
				<input class="required" minlength="6" name="email" type="email" id="email" required autocomplete="off" placeholder="Email..."> 
			</div> 
			<div class="anketa">   
				<label for="pwd">Пароль</label> 
				<input class="required" minlength="6" name="password" type="password" id="pwd" min="6" required autocomplete="off" placeholder="Пароль..."> 
			</div> 
			<!-- <div class="anketa"> 
				<label for="pwd-repeat">Повторите пароль</label> 
				<input class="required" minlength="6" type="password" id="pwd-repeat" min="6" required autocomplete="off" placeholder="Повторите пароль.."> 
			</div> --> 
	</fieldset> 
	<!-- Контактная информация --> 
	<fieldset> 
			<h3>Контактная информация:</h3> 
			<div class="anketa"> 
				<label for="name">Имя</label> 
				<input type="text" id="name" name="name" autocomplete="off" placeholder="Имя.."> 
			</div> 
			<div class="anketa">  
				<label for="lastname">Фамилия</label> 
				<input type="text" id="lastname" name="last_name" autocomplete="off" placeholder="Фамилия.."> 
			</div> 
			<div class="anketa"> 
				<span>Пол</span> 
				<label for="sex"> 
				М 
				<input type="radio" value="0" name="gender" id="sex"> 
				Ж 
				<input type="radio" value="1" name="gender" id="sex"> 
				</label> 
			</div> 
			<div class="anketa"> 
				<label for="age">Возраст</label> 
				<input type="number" id="age" name="age"  autocomplete="off" placeholder="Возраст.."> 
			</div> 
			<div class="anketa"> 
				<label for="phone">Моб.телефон</label> 
				<input min="11" max="16" type="tel" name="phone" id="phone"  autocomplete="off" placeholder="+7  - - -  - - -  - -  - - "> 
			</div> 
			<div class="anketa"> 
				<label for="cunty">Страна проживания</label> 
				<input type="text" name="country" id="county"  autocomplete="off" placeholder="Страна.."> 
			</div> 
			<div class="anketa"> 
				<label for="city">Город</label> 
				<input type="text" name="city" id="city"  autocomplete="off" placeholder="Город.."> 
			</div> 
		</fieldset> 
		<fieldset> 
			<h3>Владение иностранными языками:</h3> 
			<div class="anketa"> 
				<label for="city">Язык </label> 
				<input type="text" name="laungue" id="lang"  autocomplete="off" placeholder="Введите через запятую.."> 
			</div> 
			<div class="anketa"> 
				<p>Проходили ли Вы экзамен на знание  языка?</p> 
			<div> 
				<label> 
					Да 
					<input type="radio" name="laungue_ex" value="1" required> 
					Нет 
					<input type="radio" name="laungue_ex" value="0" required> 
					</label> 
			</div> 
			</div> 
			<div class="anketa"> 
				<label for="city"> Как вы оцениваете свои знания? </label> 
			</div> 
			<div class="anketa">     
				<label for="hear"> На слух: </label> 
				<select name="laungue_hear" id="hear" size="1" > 
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
				<select name="laungue_read" id="read" size="1" > 
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
				<select name="laungue_lett" id="write" size="1" > 
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
				<select name="laungue_talk" id="speak" size="1" > 
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
				<label for="prof">Ваша специальность / профессия? </label> 
				<input type="text" name="profession" id="prof"  autocomplete="off" placeholder="Ваша специальность,профессия.."> 
			</div> 
			<div class="anketa"> 
				<p>Имеете ли Вы опыт работы заграницей?</p> 
				<label for="ex_work"> 
				Да 
				<input type="radio" value="yes" name="exp_prof_aboard" id="ex_work"> 
				Нет 
				<input type="radio" value="no" name="exp_prof_aboard" id="ex_work"> 
				</label> 
			</div> 
		</fieldset> 
		<fieldset> 
			<h3>Дополнительная информация</h3> 
			<p>Пожалуйста, укажите или предоставьте любую полезную, на Ваш взгляд, информацию:</p> 
			<textarea name="additional_Info" id="" cols="30" rows="10" placeholder="Укажите информацию здесь.."></textarea> 
		</fieldset> 
		<div> 
			<input type="submit" value="Отправить"> 
		</div> 
		<p><? echo $reg_result; ?></p> 
	</form>
</main>
