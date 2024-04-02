<?php
    include ("./config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $query = mysqli_query($bd,"INSERT INTO employee(name, email, age ) values ('$name','$email','$age');");

    if($query){
        echo "values inserted..";
    }
    else{
        echo "Error : ".mysqli_error($bd);
    }
    mysqli_close($bd);

?>