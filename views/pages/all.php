<div class="addNews">
    <form class="myCenter" method="post">
            <input type="text" name="title" placeholder="title" required>
            <textarea name="content" placeholder="enter your news"></textarea>
            <input type="submit" value="Send">
    </form>
</div>
<table class="showNews">
        <?php foreach ($data as $id=> $newsItem): ?>
            <tr>
                <td>
                    <h2><?= $newsItem['title']?></h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p><?= mb_strimwidth($newsItem['content'], 0, 100, " ...") ?></p>
                    <form class="myCenter" method="get">
                        <input type="hidden" name="newsId" value="<?= $newsItem['id'] ?>">
                        <input type="submit" class="btn btn-default" value="Read more">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
</table>