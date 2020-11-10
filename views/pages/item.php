<form method="get">
    <input type="hidden" name="page" value="all"/>
    <input type="submit" value="All News">
</form>
<table>
    <tr>
        <td>
            <h2><?= $_GET['title'] ?></h2>
        </td>
    </tr>
    <tr>
        <td>
            <?= $_GET['content'] ?>
        </td>
    </tr>
</table>

