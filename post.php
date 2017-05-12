    <?php

    require 'config/db.php';


    //Get ID of POST

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //create query

    $query = 'SELECT * FROM posts WHERE id = ' .$id;


    // get the results

    $result = mysqli_query($conn, $query);

    // Fetch Data from database

    $post = mysqli_fetch_assoc($result);


    // var_dump is used to test out the query results - enable if needed only
    //var_dump($posts);

    // Free the results from memory

    mysqli_free_result($result);

    // close connection with MySQL database once you have retreived the data

    mysqli_close($conn);
?>


<?php include 'inc/header.php'; ?>

<div class="container">
  <a href="<?php echo ROOT_URL; ?>" class= "btn btn-default">Back</a>
      <h1><?php echo $post['title']; ?></h1>
      <hr>
      <small>Created on <?php echo $post['created_at'] ?>
      by <?php echo $post['author']; ?>
      </small>
      <p><?php echo $post['body']; ?></p>
</div>

  <?php include 'inc/footer.php'; ?>
