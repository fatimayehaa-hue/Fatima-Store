<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Hedvig+Letters+Serif:ops z@12..24&family=Playwrite+DE+SAS+Guides&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <center>
        <h3>All the products</h3>


    </center>

    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT *FROM prod");

    while ($row = mysqli_fetch_array($result)) {

        echo "
        <center> 
        

        <main>
        <div class='card' style='width: 18rem'>
            <img src='$row[img]' class='card-img-top' style ='width: 75%'; object-fit: cover;>
            <div class='card-body'>
                <h5 class='card-title'>$row[name]</h5>
                <p class='card-text'>$row[price]</p>
                <a style='background: linear-gradient(135deg,  #d4af37, #e5e5e5);' href= #' class='btn btn-primary'>Delete</a>
                <a style='background: linear-gradient(135deg,  #d4af37, #e5e5e5);' href='#' class='btn btn-primary'>Edit</a>
            </div>
        </div>
    </main>


        </center>
        ";
    }

    ?>

    


</body>

</html>