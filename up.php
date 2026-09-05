<?php

include('config.php');
if (isset($_POST['update'])) {
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['img'];
    $IMAGE_LOCATIOM = $_FILES['img']['tmp_name'];
    $IMAGE_NAME = $_FILES['img']['name'];
    $IMAGE_UP = "iamges/" . $IMAGE_NAME;
    $update = "UPDATE prod SET name='$NAME' price='$PRICE' img='$IMAGE_UP' WHERE id='$ID'";

    mysqli_query($con, $update);
    if (move_uploaded_file($IMAGE_LOCATIOM, 'iamges/' . $IMAGE_NAME)) {
        echo "<script>alert(okkkkkkkkkkkk )</script>";
    } else {

        echo "<script>alert(onnnnnnnnnnnnnnn )</script>";
    }
}
