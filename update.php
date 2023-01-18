<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Sofia+Sans&display=swap" rel="stylesheet">
        
</head>
<body>
    <div class="body">
        <?php
    $servername = "localhost";
    $username = "Natalio";
    $password = "1";
    $dbname = "todo";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $id = $_POST['id'];
    $query = "SELECT * FROM todolist WHERE id='$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        while($row = mysqli_fetch_array($query_run)){
            ?>
        <header>
            <h1 style="text-decoration: underline;"> <img src="img/logo.png" alt="logo" class="logo">My To do's</h1>
        </header>
        <form method="post" action="" >
        <input type="hidden" name = "id" value="<?php echo $row['id']?>">
            <div class="search-div">
                <input type="text" name = "content" class="search"  value="<?php echo $row['content']?>">
                <input style="border: none; background-color: transparent;" type="date" class="calendar" name="due_date">
                <button class="add-btn" name="update">Update</button>
            </div>
        </form>
        <div class="horizontal-line">
            <hr style="width: 100%;">
        </div>
        
        </div>
    </div>
    <?php     
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if (isset($_POST['update'])){
        $tasks = $_POST['content'];
        $date = $_POST['due_date'];
        
        $sql = "UPDATE todolist SET content='$tasks', due_date='$date' WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header("Location:index.php");
        } else {
        echo "Error updating record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        }
        if (isset($_POST['cancel'])){
            header("Location:passwords.php");}
        ?>
       <?php
       }
        }
        else{
            echo "No record found";
   }
   ?>
</body>
</html>
