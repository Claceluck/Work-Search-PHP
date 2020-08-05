<main>
	<div class="info_buton conteiner">
        <h3 class="conteiner">Напишите свою историю</h3>
    </div>
  	<form action="/addNews" method="POST">
	  	<fieldset> 
			<div class="anketa">
				<label for="news_header">Название</label>
				<input type="text" name="news_header" id="article" placeholder="Название" required>
			</div>
		</fieldset> 
      	<fieldset> 
			<label for="article">Содержание</label>
			<textarea name="article" id="" cols="30" rows="10" placeholder="Текст" required></textarea> 
		</fieldset> 
		<!-- <div class="anketa">
			<label for="article">Загруить изображение</label>
			<input type="file" accept="image/*" name="picture">
		</div> -->
		<div> 
			<input type="submit" value="Добавить историю"> 
		</div>
	</form>
</main>
