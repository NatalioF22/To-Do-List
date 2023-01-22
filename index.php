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

    <?php
        if($query_run){
    while ($row = mysqli_fetch_array($query_run)) {
            ?>
        <div class="container-lg ">
            <div class="row">
                <div class="col ">
                    <div class="p-1 my-2 bg-info ">
                        <h2 style="font-size:2vw;" ><?php echo $row['content']; ?></h2>
                    </div>
                    <hr>
                </div>
                <div class="col ">
                    <div class="p-1 my-2 bg-info mx-1">
                    <h2 style="font-size:2vw;"><?php echo $row['added_date']; ?></h2>
                    </div>
                    <hr>
                </div>
                <div class="col ">
                    <div class="p-1 my-2 bg-info">
                    <h2 style="font-size:2vw;"><?php echo $row['due_date']; ?></h2>
                    </div>
                    <hr>
                </div>
                <div class="col  ">
                    <div class="p-1 my-2 bg-info btn-group btn-group-xs ">
                        <form action="config/update.php" method="post">
                            <input type="hidden" name ="id" value="<?php echo $row['id'];?>">
                            <input type="submit" name = "edit" value="UPDATE" style="font-size:1vw;" class="btn btn-success   d-inline-block"> 
                        </form>
                        <form action="config/delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input type="submit" name = 'delete' value="DELETE"  style="font-size:1vw;" class="btn btn-danger  d-inline-block">
                        </form>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
    
        <?php
    }}
    else{
    echo "No record found";
    }
    
        ?>

</body>
</html>


