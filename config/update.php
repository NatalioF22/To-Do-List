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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <form method="post" action="" >
    <input type="hidden" name = "id" value="<?php echo $row['id']?>">
    <div class="container-lg my-4">
        <div class="row">
            <div class="col">
                <div class="p-5 bg-primary"><h1 style="text-align: center;">Todo's</h1></div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col">
                
                    <div class="p-3 bg-primary px-5">
                    <form action="" method="post">
                        <input type="text" name = "content" class="w-75 border rounded-3 display-6 px-4"  value="<?php echo $row['content']?>">
                    
                        <input type="date" class="calendar" name="due_date" required>
                        <button class="btn btn-success align-top border rounded-3 display-3 px-4 add-btn btn btn-xs" name="update">Update</button>
                        <a class="btn btn-danger align-top border rounded-3 display-3 px-4 add-btn" href="index.php">Cancel</a>

                        </form>
                
                    </div>
               
            </div>
        </div>
        <hr class="border border-primary border-3 opacity-75">
   
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
            header("Location:index.php");}
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