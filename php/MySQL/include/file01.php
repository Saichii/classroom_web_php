<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include & require</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- <header>11/15 檔案拆分</header> -->
    <?php include "header.html"; ?>
    <!-- <?php include "nav.php"; ?> -->
   
    <?php
    if(isset($_GET['do'])){
        include "nav.php"; 
    }
    
    ?>

    <div class="body">
        file01 content
    </div>

    <?php include "footer.php" ?>

</body>
</html>