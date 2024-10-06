<?php

    include 'config.php';

    if(isset($_POST['addProduct'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $folder = "img/" . $img;
        move_uploaded_file($tmp_name, $folder);
        $sql ="INSERT INTO `products` (`name`, `price`, `img`) VALUES ('$name', '$price', '$img')";
        mysqli_query($conn, $sql);
        header('Location: index.php');
    }

?>