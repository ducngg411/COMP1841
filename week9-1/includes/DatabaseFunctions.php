    <?php
    function totalJokes($pdo) {
        $query = query($pdo, 'SELECT COUNT(*) FROM joke');
        $row = $query->fetch();
        return $row[0];
    }

    // function query($pdo, $sql) {
    //     $query = $pdo->prepare($sql);
    //     $query->execute();
    //     return $query;
    // }

    function query($pdo, $sql, $parameters = []) {
        $query = $pdo->prepare($sql);
        $query->execute($parameters);
        return $query;
    }

    function getJoke($pdo, $id) {
        $sql = "SELECT * FROM joke WHERE id = :id";
        $parameters = [':id'=>$id];
        $query = query ($pdo, $sql, $parameters);
        return $query -> fetch();
    }

    function updateJoke($pdo, $jokeId, $joketext) {
        $query = 'UPDATE joke SET joketext = :joketext WHERE id = :id';
        $parameters = [':joketext' => $joketext, ':id' => $jokeId];
        query($pdo, $query, $parameters);
    }

    function deleteJoke($pdo, $id) {
        $parameters = [':id' => $id];
        query($pdo, 'DELETE FROM joke WHERE id = :id', $parameters);
    }

    function insertJoke($pdo, $joketext, $authorid, $categoryid) {
        $query = 'INSERT INTO joke (joketext, jokedate, authorid, categoryid)
        VALUES (:joketext, CURDATE(), :authorid, :categoryid)';
        $parameters = [':joketext' => $joketext, ':authorid' => $authorid, ':categoryid'=> $categoryid];
        query($pdo, $query, $parameters);
    }

    function allAuthors($pdo) {
        $authors = query($pdo, 'SELECT * FROM author');
        return $authors->fetchAll();
    }

    function allCategories($pdo) {
        $categories = query($pdo, 'SELECT * FROM category');
        return $categories->fetchAll();
    }

    function allJokes($pdo) {
        $jokes = query($pdo, 'SELECT joke.id, joketext, `name`, email, categoryName FROM joke
        INNER JOIN author ON authorid = author.id
        INNER JOIN category ON categoryid = category.id');
        return $jokes->fetchAll();
    }
