<?php
    include("./config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $query = mysqli_query($bd,"UPDATE employee set name='$name', email='$email',age='$age' where email='$email';");

    if($query){
        echo "value updating";
    }
    else{
        echo "Error : ".mysqli_error($bd);
    }
    mysqli_close($bd);
?>