<main>
    <div class="info_buton conteiner">
        <h3 class="story_header"><? echo $news['news_header'] ?></h3>
        <div class="conteiner story_block story_block_xm story_block_xs">
            <div class="story_block_1 story_block_1_xs">
                <img class="story_img" src="/static/img/new_germ.jpg" alt="#">
                <div>
                    <p><? echo $news['article'] ?></p>
                </div>
            </div>
        </div>
    </div>
        <h3 class="conteiner">Комментарий</h3>
    </div>
    <div>
        <p>Тут будут комментарии: <? echo $news['comment_text']?></p>
    </div>
  	<form action="/addComment" method="POST">
      	<fieldset> 
			<textarea name="comment_text" id="comment_text" cols="30" rows="10" placeholder="Введите сюда комментарий"></textarea> 
		</fieldset> 
		<div> 
			<input type="submit" value="Добавить коментарий"> 
		</div>
	</form>
</main>