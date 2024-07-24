<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" name="jokeid" value="<?php echo htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8'); ?>">
        <label for="joketext">Type your joke here:</label>
        <textarea id="joketext" name="joketext" rows="3" cols="40"><?php echo htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8'); ?></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>