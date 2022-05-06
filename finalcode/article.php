<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./blog.css">
    <link rel="stylesheet" href="home.css">

    <link rel="stylesheet" href="./prism.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <?php
        include 'navbar.php';
    ?>

    <?php
            include 'connect.php';

if(isset($_GET['id'])){
            $id = $_GET['id'];
$records = mysqli_query($conn, "select * from blog where `blog_id`=$id"); // fetch data from database

while ($data = mysqli_fetch_array($records)) {
    $id = $data['blog_id'];
    $header = $data['header'];
    $content = $data['content'];
    $date = $data['blog_date'];
    $tag1 = $data['tag1'];
    $tag2 = $data['tag2'];
    $tag3 = $data['tag3'];
    $user = $data['user'];
    $img = $data['img'];
            


    ?>

    <main>
        <aside class="side-nav">
            <div class="side-panel">
                <div class="like">
                    <i class="fas fa-thumbs-up"></i>
                    Like
                </div>
                <div class="saved">
                    <i class="fas fa-bookmark"></i>
                    Save
                </div>
                <div class="share">
                    <i class="fas fa-share-alt"></i>
                    Share
                </div>
            </div>
        </aside>
        <section class="main-section">
            <article class="blog">
                <h1 class="blog-title">
                    <?php echo $header ?>
                </h1>
                <div class="blog-body">
                <img src="post_image/<?php echo $img ?>" class="post-img">

                <?php echo $content ?>
                    
                </div>
                <hr>
                <div class="blog-comments">

                    <!-- PHP CODE FOR COMMENTS -->

              

                    <h1>Comments: </h1>

                    <div class="write-comment">
                        <form action="article.php" method="post">
                            <textarea name="comment" id="comment" class="put-comment" placeholder="Your Comment.." required cols="30" rows="10"></textarea>
                            <button type="submit" name="commsubmit" class="fas fa-paper-plane"></button>
                            <input type="hidden" name="blog_id" id="id" value="<?php echo $id ?>" />
                        </form>
                    </div>

                    <?php
                    $records = mysqli_query($conn, "select * from comment WHERE `blog_id` = $id"); // fetch data from database

                    while ($data = mysqli_fetch_array($records)) {
                        $id = $data['co_id'];
                        $name = $data['co_user'];
                        $comment = $data['co_desc'];
                        $date = $data['date'];

                    ?>
                    <div class="comment">
                        <div class="user-data">
                            <div class="commenter-name"><?php echo $name ?></div>
                            <div class="comment-date">Date: <?php echo $date; ?></div>
                        </div>
                        <div class="comment-body">
                        <?php echo $comment; ?>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </article>            
        </section>
        <section class="other-side">
            <div class="user-profile">
                <div class="user-basic">
                    <h2 class="user-name">Swarup Vishwas</h2>
                </div>
                <div class="user-about">Proud student of GPA, and sometimes called as HBP</div>
                <div class="user-stat">
                    <div class="follow user-control">
                        <i class="fas fa-users"></i>
                        <div class="follow-num">1000</div>
                    </div>
                    <div class="all-post user-control">
                        <i class="fas fa-quote-left"></i>
                        <div class="allpost-name"><a href="#">all post</a></div>
                    </div>
                </div>
                <div class="follow-btn">
                    <button>FOLLOW</button>
                </div>
            </div>
            <div class="related-post">
                <h1 class="rel">Tags Used:</h1>
                <div class="post">
                    <a href="findByTag.php?tag=<?php echo $tag1 ?>">
                        <h3><?php echo "#$tag1"?></h3>
                    </a>
                </div>
                <div class="post">
                    <a href="findByTag.php?tag=<?php echo $tag2 ?>">
                    <h3><?php echo "#$tag2"?></h3>

                    </a>
                </div>
                <div class="post">
                    <a href="findByTag.php?tag=<?php echo $tag3 ?>">
                    <h3><?php echo "#$tag3"?></h3>

                    </a>
                </div>
            </div>
        </section>
    </main>
    <?php
}
        }
    ?>

<?php
                        if(isset($_POST['commsubmit'])){
                            $comm = $_POST['comment'];
                            $sessname = "Yash Aher";
                            $date = date("Y-m-d");
                            $id = (int)$_POST['blog_id'];

                            $sql = "INSERT INTO comment (`co_id`, `co_user`,`co_desc`,`blog_id`,`date`) VALUES (null,'$sessname','$comm','$id', '$date')";
                            if(mysqli_query($conn, $sql)){
                                header("Location: ./article.php?id=$id");
                            }else{
                            echo("Error Occured Creating Comment..!!".mysqli_error($conn));
                            exit(mysqli_error($conn));
                            header("Location: ./index.php");
                            }

                        }
                    ?>
    <footer>
        &copy; GPA Community
    </footer>
    <script src="./prism.js"></script>
    <script src="article.js"></script>
</body>
</html>