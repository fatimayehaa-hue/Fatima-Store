<?php

include('config.php');
if (isset($_POST['upload'])){

    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['img'];
    $IMAGE_LOCATIOM = $_FILES['img']['tmp_name'];
    $IMAGE_NAME = $_FILES['img']['name'];
    $IMAGE_UP = "iamges/".$IMAGE_NAME;
    $INSERT="INSERT INTO prod (name, price ,img) VALUES ('$NAME',' $PRICE ','$IMAGE_UP')";


    mysqli_query($con ,$INSERT);
    if(move_uploaded_file($IMAGE_LOCATIOM,'iamges/'. $IMAGE_NAME)){
        echo "<script>alert(okkkkkkkkkkkk )</script>";
    }else{

        echo "<script>alert(onnnnnnnnnnnnnnn )</script>";
    }


}  

?>