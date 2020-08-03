<main>
    <div class="info_buton conteiner">
        <h3 class="conteiner"> Ваш профиль </h3>
	</div>
	<form action="#"></form>
		<fieldset>
			<p>ID: <? echo $userAccount['id_user'] ?></p>
			<div class="anketa"> 
				<label for="email">Email</label> 
				<input class="required" value="<? echo $userAccount['email'] ?>">
			</div>
			<div class="anketa">   
				<label for="pwd">Пароль</label> 
				<input class="required" type="password" value="<? echo $userAccount['hash'] ?>"> 
			</div> 
		</fieldset>
		<fieldset> 
			<h3>Контактная информация:</h3> 
			<div class="anketa"> 
				<label for="name">Имя</label> 
				<input type="text" id="name" name="name" value="<? echo $userAccount['user_name']?>"> 
			</div> 
			<div class="anketa">  
				<label for="lastname">Фамилия</label> 
				<input type="text" id="lastname" name="last_name" value="<? echo $userAccount['user_last_name']?>"> 
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
				<input type="number" id="age" name="age" value="<? echo $userAccount['user_age']?>"> 
			</div> 
			<div class="anketa"> 
				<label for="phone">Моб.телефон</label> 
				<input min="11" max="16" type="tel" name="phone" id="phone" value="<? echo $userAccount['user_phone']?>">
			</div> 
			<div class="anketa"> 
				<label for="cunty">Страна проживания</label> 
				<input type="text" name="country" id="county" value="<? echo $userAccount['user_country']?>"> 
			</div> 
			<div class="anketa"> 
				<label for="city">Город</label> 
				<input type="text" name="city" id="city" value="<? echo $userAccount['user_city']?>"> 
			</div> 
		</fieldset> 
		<fieldset> 
			<h3>Владение иностранными языками:</h3> 
			<div class="anketa"> 
				<label for="city">Язык </label> 
				<input type="text" name="laungue" id="lang" value="<? echo $userAccount['user_laungue']?>"> 
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
				<input type="text" name="profession" id="prof" value="<? echo $userAccount['user_profession']?>"> 
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
			<textarea name="additional_Info" id="" cols="30" rows="10" ><? echo $userAccount['user_additional_Info']?></textarea> 
		</fieldset> 
		<div> 
			<input type="submit" value="Изменить"> 
		</div> 
	</form>
</main> 
 