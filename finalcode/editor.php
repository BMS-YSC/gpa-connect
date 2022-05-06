<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <style>
        .form{
            margin-top: 10rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css" integrity="sha512-nwpMzLYxfwDnu68Rt9PqLqgVtHkIJxEPrlu3PfTfLQKVgBAlTKDmim1JvCGNyNRtyvCx1nNIVBfYm8UZotWd4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
    include 'navbar.php';
?>

    <form method="POST" class="form" action="editback.php" enctype="multipart/form-data">
        <input type="text" placeholder="Header" name="header" id="header">
        <input type="text" name="tag1" id="tag1">
        <input type="text" name="tag2" id="tag2">
        <input type="text" name="tag3" id="tag3">

        <input type="file" 
                   name="uploadfile" 
                   value="" />

        <textarea id="parse" name="content"></textarea>
        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
    </form>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js" integrity="sha512-t4CFex/T+ioTF5y0QZnCY9r5fkE8bMf9uoNH2HNSwsiTaMQMO0C9KbKPMvwWNdVaEO51nDL3pAzg4ydjWXaqbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script>
    // Doing this in a loaded JS file is better, I put this here for simplicity
    $('#parse').trumbowyg();
            
</script>
          
</body>
</html>