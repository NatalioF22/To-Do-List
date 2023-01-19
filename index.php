<?php include "inc/header.php";
$connection = mysqli_connect("localhost","Natalio","1");
$db = mysqli_select_db($connection,'todo');


$date = "added_date";
//$query = "SELECT * FROM todolist WHERE checked='$id'";
if (isset($_POST['sort'])){
    $date = $_POST['sorting'];
}



$query = "SELECT * FROM todolist ORDER BY $date";
$query_run = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>
    <div class="sub-head-tasks" style="margin-bottom: 10px;">
    <?php
        if($query_run){
        while($row = mysqli_fetch_array($query_run)){
            ?>
        <div class="status-desc">
            <input type="checkbox" name="check" id="" value="" class="status">
            
        </div>
        <div class="tasks-description" style="margin-bottom: 10px;">
            <h2><?php echo $row['content']; ?></h2>
        </div>
        <div class="added-date-description">
            <h2><?php echo $row['added_date']; ?></h2>
        </div>
        <div class="due-date-description">
            <h2><?php echo $row['due_date']; ?></h2>
        </div>
        <div class="funtions-description">
            <div  class="edit">
            <form action="update.php" method="post">
                <input type="hidden" name ="id" value="<?php echo $row['id']?>">
                <input type="submit" name = "edit" value="UPDATE" class="edit"> 
            </form>
            </div>
            <div  class="delete">
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <input type="submit" name = 'delete' value="DELETE" class="delete">
            </form>
            </div>
        </div>
        <br>
        <?php
    }
        }
        else{
            echo "No record found";
        }
        ?>

    </div>
</body>
</html>


