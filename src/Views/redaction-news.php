<main>
	<div class="info_buton conteiner">
        <h3 class="conteiner"></h3>
    </div>
      <form action="/redactionNews" method="POST">
      <input type="text" name="id_news" id="id_news" value="<? echo $news['id_news']?>" hidden>
	  	<fieldset>
			<div class="anketa">
                <label for="news_header">Название</label>
				<input type="text" name="news_header" id="article" value="<? echo $news['news_header'] ?>">
			</div>
		</fieldset> 
      	<fieldset> 
			<label for="article">Содержание</label>
			<textarea name="article" id="article"><? echo $news['article'] ?></textarea> 
		</fieldset> 
		<div> 
			<input type="submit" value="Редактировать новость"> 
		</div>
	</form>
</main>
