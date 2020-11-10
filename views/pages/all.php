<form method="post">
    <div>
        <input type="text" name="title" placeholder="title" required>
        <textarea name="content" placeholder="enter your news"></textarea>
    </div>
    <input type="submit" value="Send">
</form>

<table>
    <?php if(is_array($this->news)) :  ?>
        <?php foreach ($this->news as $id=> $newsItem): ?>  <!--TODO MAKE IT CORRECT   -->
            <tr>
                <td>
                    <h2><?= mb_strimwidth($newsItem['title'] , 0, 50, " ...") ?></h2>
                </td>
            </tr>
        <tr>
            <td>
                <p><?= $newsItem['content'] ?></p>
                <form method="get">
                    <input type="hidden" name="page" value="item"/>
                    <input type="hidden" name="newsId" value="<?= $newsItem['id'] ?>">
                    <input type="submit" class="btn btn-default" value="Read more">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>