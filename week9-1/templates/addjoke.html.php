<form action="" method="post">
    <label for="joketext">Type your joke here:</label>
    <textarea name="joketext" rows="3" cols="40"></textarea>

    <select name="authors">
        <option value="">select an author</option>
        <?php foreach ($authors as $author): ?>
            <option value="<?= htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
                <?= htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach; ?>
    </select>


    <select name="categories" >
        <option value="">Select an category</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
    </select>

    <input type="submit" name="submit" value="Add">
</form>