<form method="post">
    <div>
        <input type="text" name="title" placeholder="title" required>
        <textarea name="content" placeholder="enter your news"></textarea>
    </div>
    <input type="submit" value="Send">
</form>
<table>
        <?php foreach ($data as $id=> $newsItem): ?>
            <tr>
                <td>
                    <h2><?= $newsItem['title']?></h2>
                </td>
            </tr>
        <tr>
            <td>
                <p><?= mb_strimwidth($newsItem['content'], 0, 100, " ...") ?></p>
                <form method="get">
                    <input type="hidden" name="page" value="item"/>
                    <input type="hidden" name="newsId" value="<?= $newsItem['id'] ?>">
                    <input type="submit" class="btn btn-default" value="Read more">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
</table>