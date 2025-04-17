<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Date</td>
    </tr>
    <?php
    $db = require 'vendor/db.php';

    $posts = mysqli_query($db, 'SELECT * FROM `posts`');
    $posts = mysqli_fetch_all($posts);

    foreach ($posts as $post) {
        ?>
        <tr>
            <td><?= $post[0] ?></td>
            <td><?= $post[1] ?></td>
            <td><?= $post[3] ?></td>
            <td><a href="vendor/open_post.php?id=<?= $post[0] ?>">Open post</a></td>
            <td><a href="vendor/delete.php?id=<?= $post[0] ?>">Delete post</a></td>
        </tr>

        <?php
    }
    ?>
</table>

<form action="vendor/create.php" method="POST">
    <label for="name">
        Title: <br> <input type="text" name="title" id="name">
    </label>
    <br>
    <label for="body">
        Post body: <br><textarea name="body" id="body"></textarea>
    </label>
    <br>
    <button type="submit">Post</button>
</form>
