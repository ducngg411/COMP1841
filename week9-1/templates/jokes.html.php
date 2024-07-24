<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            display: inline-block;
            position: relative;
            left: 50%;
            transform: translateX(-50%);n
        }
    </style>
</head>
<body>
    <form action="deletejoke.php" method="post">
        <p><?=$totalJokes?> jokes have been submitted to the Internet Joke Database.</p>
        
        <?php foreach($jokes as $joke): ?>
            <blockquote>
                <div class="container" id="container">
                    <input type="checkbox" name="ids[]" value="<?=$joke['id']?>">
                    
                    <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>

                    (by:<a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8' );?>"><?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8' ); ?></a>)
                    
                    <br/><?=htmlspecialchars($joke['categoryName'], ENT_QUOTES, 'UTF-8') ?>

                    <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a>
                </div>
            </blockquote>
        <?php endforeach;?>
        <input style="margin-left: 40px" type="submit" value="Delete">
    </form>
</body>
</html>