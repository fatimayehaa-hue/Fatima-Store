<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatima shope</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post">
                <h2>fatima shope</h2>
                <img src="logo.png" alt="logo" width="250">
                <br>
                <input type="text" name="name" >
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" id="file" name ="img" style="display:none;">
                <label for="file">uplod img</label>
                <button name="uplod">uplod item</button>
                <br>
                <a href="product.php">show all the products</a>
            </form>
        </div>
        <div id="main"></div>
        <p>developer dy fatima</p>
    </center>


</body>

</html>