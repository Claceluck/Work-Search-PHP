<main>
	<div class="info_buton conteiner">
        <h3 class="conteiner">Напишите новость</h3>
    </div>
  	<form action="/addNews" >
	  	<fieldset> 
			<div class="anketa">
				<label for="name">Название</label>
				<input type="text" name="news_header" id="article" placeholder="Название">
			</div>
		</fieldset> 
      	<fieldset> 
		  <label for="name">Содержание</label>
			<textarea name="article" id="" cols="30" rows="10" placeholder="Текст"></textarea> 
		</fieldset> 
	</form>
	<div> 
		<input type="submit" value="Добавить новость"> 
	</div>
	<? echo $newsResult;?>
</main>
