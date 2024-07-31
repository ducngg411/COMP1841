<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../jokes.css?v=<?php echo time(); ?>">
    <title><?=$title?></title>
</head>
<body>
    <header id="admin"><h1>Internet Joke Database</h1></header>
    <nav>
        <ul>
            <li><a href="jokes.php">Manage Jokes</a></li>
            <li><a href="authors.php">Manage authors</a></li>
            <li><a href="login/logout.php">Public site/Logout</a></li>
            <!-- <li><a href="../logout.php">Log out</a></li> -->
            
            <!-- <li><a href="addjoke.php">Add a new joke</a></li> -->
        </ul> 
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>&copy; IJDB 2023</footer>
</body>
</html>