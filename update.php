<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Hedvig+Letters+Serif:opsz@12..24&family=Playwrite+DE+SAS+Guides&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php

    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con, "SELECT * FROM prod WHERE id=$ID ");
    $data = mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
            <form action="product.php" method="post" enctype="multipart/form-data">
                <h2>Edit</h2>

                <img src='$data[]' alt="logo" width="250">
                <br>
                <input type="text" name="id" value='<?php echo $data['id'] ?>'>

                <br>
                <input type="text" name="name" placeholder="product name" value='<?php echo $data['name'] ?>'>
                <br>
                <input type="text" name="price" placeholder="price" value='<?php echo $data['price'] ?>'>
                <br>
                <input type="file" id="file" name="img" style="display:none;">
                <label for="file">update img</label>
                <button name="upload">update item</button>
                <br>
                <a href="product.php">show all the products</a>
            </form>
        </div>
        <div id="main"></div>
        <p>developer dy fatima</p>
    </center>


</body>

</html>