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
        <?php foreach ($comment as $com):?>
        <div>
            <p>Автор:<? echo $_SESSION['email']?></p>
            <p>Добавленно:<? echo $com['added']?></p>
            <p><? echo $com['comment_text']?></p>
            <a type="delete" href="/news/comment/<?echo $com['id_comment']?>">Удалить</a>
            <hr>
        </div>
        <?php endforeach;?>
    </div>
  	<form action="/addComment" method="POST">
      	<fieldset>
            <input type="hidden" name="id_news" value="<? echo $news['id_news'] ?>">
			<textarea name="comment_text" id="comment_text" cols="30" rows="10" placeholder="Введите сюда комментарий"></textarea> 
		</fieldset> 
		<div> 
			<input type="submit" value="Добавить коментарий"> 
		</div>
	</form>
</main>
