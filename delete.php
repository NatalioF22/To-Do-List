
<?php

$connection = mysqli_connect("localhost","Natalio","1");
$db = mysqli_select_db($connection,"todo");

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query =  "DELETE FROM todolist WHERE id = '$id'";
    
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo "Deleted Successfully";
        header('Location:index.php');
    }else{
        echo "Not Done";
    }

}

?>