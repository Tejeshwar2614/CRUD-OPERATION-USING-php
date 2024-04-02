<?php
    include("./config.php");
    $email = $_POST['email'];

    $query = mysqli_query($bd,"SELECT * from employee;");
    if($query){
        while($row = mysqli_fetch_array($query)){
            echo $row['name']."".$row['email']."".$row['age']."<br>"; 
       }
    }
    else{
        echo "Error" . mysqli_error($bd);
    }
?>