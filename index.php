<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Hedvig+Letters+Serif:opsz@12..24&family=Playwrite+DE+SAS+Guides&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatima shope</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>fatima shope</h2>
                <img src="logo.png" alt="logo" width="250">
                <br>
                <input type="text" name="name">
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" id="file" name="img" style="display:none;">
                <label for="file">uplod img</label>
                <button name="upload">upload item</button>
                <br>
                <a href="product.php">show all the products</a>
            </form>
        </div>
        <div id="main"></div>
        <p>developer dy fatima</p>
    </center>


</body>

</html>