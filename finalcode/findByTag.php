

<!DOCTYPE html>
<html>
    <head>
        <title>Gpa Connect | Home Page </title>
        <link rel="stylesheet" href="home.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <style>
            a{
                text-decoration:none;
            }
        </style>
    </head>
<body>


    <!-- navbar -->
  <?php
        include 'navbar.php';
  ?>
    <!-- three part -->

    <div class="main_part">

    <?php
            include 'leftbar.php';
       ?>

<div class="center_part">


        <?php


if(isset($_GET['tag'])){
    $tag = $_GET['tag'];

include 'connect.php';

$records = mysqli_query($conn, "select * from blog WHERE tag1 = '$tag'")
or die("Eror".mysqli_error($conn));
 // fetch data from database
while ($data = mysqli_fetch_array($records)) {
    $id = $data['blog_id'];
    $header = $data['header'];
    $content = substr($data['content'],100);
    $date = $data['blog_date'];
    $tag1 = $data['tag1'];
    $tag2 = $data['tag2'];
    $tag3 = $data['tag3'];
    $user = $data['user'];
    $img = $data['img'];
    ?>
      <a href="article.php?id=<?php echo $id ?>">
              <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <div>
                            <p><?php echo $user ?></p>
                            <span><?php echo $date ?></span>
                        </div>
                    </div>
                </div>
                <p class="post-text">

                <div class="co2">
                <h2><?php echo $header ?></h2>
                <br>
                <hr>
                <br>
                    <?php echo $content ?>
               <br>
                </div>
                  <a href="#"><?php echo "#$tag1" ?></a> <a href="#"><?php echo "#$tag2" ?></a> <a href="#"><?php echo "#$tag3" ?></a> 
                </p>
                <img src="post_image/<?php echo $img ?>" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="images/share.png"></div>
                    </div>
                </div>
            </div>
        </a>
    <?php
}
}
?>
        </div>


<?php

$records = mysqli_query($conn, "select * from blog WHERE tag2 = '$tag'")
or die("Eror".mysqli_error($conn));
 // fetch data from database
while ($data = mysqli_fetch_array($records)) {
    $id = $data['blog_id'];
    $header = $data['header'];
    $content = substr($data['content'],100);
    $date = $data['blog_date'];
    $tag1 = $data['tag1'];
    $tag2 = $data['tag2'];
    $tag3 = $data['tag3'];
    $user = $data['user'];
    $img = $data['img'];
    ?>
      <a href="article.php?id=<?php echo $id ?>">
        <div class="center_part">
              <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <div>
                            <p><?php echo $user ?></p>
                            <span><?php echo $date ?></span>
                        </div>
                    </div>
                </div>
                <p class="post-text">

                <div class="co2">
                <h2><?php echo $header ?></h2>
                <br>
                <hr>
                <br>
                    <?php echo $content ?>
               <br>
                </div>
                  <a href="#"><?php echo "#$tag1" ?></a> <a href="#"><?php echo "#$tag2" ?></a> <a href="#"><?php echo "#$tag3" ?></a> 
                </p>
                <img src="post_image/<?php echo $img ?>" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="images/share.png"></div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    <?php
}

?>

<?php
$records = mysqli_query($conn, "select * from blog WHERE tag3 = '$tag'")
or die("Eror".mysqli_error($conn));
 // fetch data from database
while ($data = mysqli_fetch_array($records)) {
    $id = $data['blog_id'];
    $header = $data['header'];
    $content = substr($data['content'],100);
    $date = $data['blog_date'];
    $tag1 = $data['tag1'];
    $tag2 = $data['tag2'];
    $tag3 = $data['tag3'];
    $user = $data['user'];
    $img = $data['img'];
    ?>
      <a href="article.php?id=<?php echo $id ?>">
        <div class="center_part">
              <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <div>
                            <p><?php echo $user ?></p>
                            <span><?php echo $date ?></span>
                        </div>
                    </div>
                </div>
                <p class="post-text">

                <div class="co2">
                <h2><?php echo $header ?></h2>
                <br>
                <hr>
                <br>
                    <?php echo $content ?>
               <br>
                </div>
                  <a href="#"><?php echo "#$tag1" ?></a> <a href="#"><?php echo "#$tag2" ?></a> <a href="#"><?php echo "#$tag3" ?></a> 
                </p>
                <img src="post_image/<?php echo $img ?>" class="post-img">
                <div class="post-row">
                    <div class="activity-icons">
                        <div><img src="images/share.png"></div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    <?php
}

?>







        <?php
            include 'end.php';
        ?>