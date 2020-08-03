<main>
    <!-- Основной контент -->
    <div class="info_buton conteiner">
        <h3 class="story_header">Истории людей</h3>
        <div class="conteiner story_block story_block_xm story_block_xs">
            <?php foreach ($news as $item):?>
            <div class="story_block_1 story_block_1_xs">
                <img class="story_img" src="/static/img/new_germ.jpg" alt="#">
                <div>
                    <h3><? echo $item['news_header']?></h3>
                    <p><? echo $item['article'] ?></p>

                    <a class="read_later" href="/news/<?echo $item['id_news']?>">
                    <span>Читать дальше...</span></a>
                    <? if (isset($_SESSION['email'])): ?>
                        <a type="redaction" href="/news/redaction/<?echo $item['id_news']?>">Редактировать</a>
                        <a type="delete" href="/news/delete/<?echo $item['id_news']?>">Удалить</a>
                    <? else: ?>
                    <? endif; ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <? if (isset($_SESSION['email'])): ?>
        <li><a class="button-new-news" href="/new-news">Добавить историю...</a></li>
    <? else: ?>
    <? endif; ?>
</main>
