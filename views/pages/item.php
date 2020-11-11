<form class="myCenter" method="get">
    <input type="submit" value="All News">
</form>
<table class="showNews">
    <?php foreach ($data as $newsItem): ?>
    <tr>
        <td>
            <h2><?= $newsItem['title'] ?></h2>
        </td>
    </tr>
    <tr>
        <td>
            <?= $newsItem['content'] ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

