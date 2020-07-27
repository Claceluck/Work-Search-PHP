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
