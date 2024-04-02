<?php
    include('./config.php');
    $email = $_POST["email"];
    $query = mysqli_query($bd,"DELETE FROM employee where email = '$email';");
    if($query){
        echo "values deleted..";
    }
    else{
        echo "Error : ".mysqli_error($bd);
    }
    mysqli_close($bd);
    
?>