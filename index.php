<?php

require 'config/db.php';

//create query

$query = 'SELECT * FROM posts';

// get the results

$result = mysqli_query($conn, $query);

// Fetch Data from database

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);


// var_dump is used to test out the query results - enable if needed only
//var_dump($posts);

// Free the results from memory

mysqli_free_result($result);

// close connection with MySQL database once you have retreived the data

mysqli_close($conn);

 ?>
<?php include 'inc/header.php'; ?>

  <div class="container">
    <h1>Posts</h1>
    <?php foreach($posts as $post) : ?>
    <div class="well">
      <h3><?php echo $post['title']; ?></h3>
      <small>Created on <?php echo $post['created_at'] ?>
        by <?php echo $post['author']; ?>
      </small>
      <p><?php echo $post['body']; ?></p>
      <a class="btn btn-default" href="post.php?id=<?php echo $post['id']; ?> ">Read More</a>

    </div>
  <?php  endforeach; ?>

    </div>
  <?php include 'inc/footer.php' ?>
