<?php

if(isset($_POST['submit'])){
    include 'connect.php';

    $header = $_POST['header'];
    $content = $_POST['content'];
    $sess_name = "Swarup";
    $date = date("Y-m-d");
    $tag1 = $_POST['tag1'];
    $tag2 = $_POST['tag2'];
    $tag3 = $_POST['tag3'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "post_image/".$filename;

    $sql = "INSERT INTO `blog`(`blog_id`, `header`, `content`,`blog_date`,`tag1`,`tag2`,`tag3`, `user`, `img`) VALUES (null,'$header','$content','$date','$tag1','$tag2','$tag3','$sess_name', '$filename')";
    
    if (mysqli_query($conn, $sql)) {
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        header('Location: ./index.php');

        }else{
            $msg = "Failed to upload image";
      }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}