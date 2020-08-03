<main>
    <!-- Основной контент -->
    <div class="info_buton conteiner">
        <h3 class="conteiner"> Ваш профиль </h3>
	</div>
	<fieldset>
		<p>ID: <? echo $userAccount['id_user'] ?></p>
		<div class="anketa"> 
			<label for="email">Email</label> 
			<input class="required" value="<? echo $userAccount['email'] ?>">
		</div>
		<div class="anketa">   
			<label for="pwd">Пароль</label> 
			<input class="required" minlength="6" name="password" type="password" id="pwd" min="6" value="<? echo $userAccount['hash'] ?>"> 
		</div> 
	</fieldset>
			<a href="/user-account/<?echo $_SESSION['email']?>/<? echo $userInfo['id_info']?>">Подробнее...</a>
</main> 
 