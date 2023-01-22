<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
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
                        <input type="text" name="search" id="" class="w-75 border rounded-3 display-6 px-4" placeholder="Add Item" required>
                        <input type="date" class="calendar" name="due_date" required>
                        <button class="btn btn-success align-top border rounded-3 display-3 px-4 add-btn" name="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
        <hr class="border border-primary border-3 opacity-75">
    </div>
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="p-3 bg-primary">
                    <form action="" method="post">
                        <button class="btn bg-secondary" name="sort">Sort by</button>
                        <select name="sorting" id="" class="btn btn-secondary">
                            <option value="added_date">Added Date</option>
                            <option value="due_date">Due Date</option>
                        </select>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="container-lg mt-2">
        <div class="row">
            <div class="col">
                <div class="p-1 bg-primary display-6 text lead fo"><h1 style="text-align: center; font-size:2vw;">Taks</h1></div>
            </div>
            <div class="col">
                <div class="p-1 bg-primary"><h1 style="text-align: center;font-size:2vw;">Added</h1></div>
            </div>
            <div class="col">
                <div class="p-1 bg-primary"><h1 style="text-align: center;font-size:2vw;">Due Date</h1></div>
            </div>
            <div class="col">
                <div class="p-1 bg-primary"><h1 style="text-align: center;font-size:2vw;">Options</h1></div>
            </div>
        </div>
        <hr class="border border-primary border-3 opacity-75">
        
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<?php 
    $connection = mysqli_connect("localhost","Natalio","1");
    $db = mysqli_select_db($connection,"todo");

    if(isset($_POST['submit'])){
        $tasks = $_POST['search'];
        $date = $_POST['due_date'];
    
        $query =  "INSERT INTO `todolist`(content, due_date) VALUES ('$tasks','$date')";
        
        $query_run = mysqli_query($connection,$query);

        if($query_run){
            echo "Added Successfully";
        header("Location: index.php");
        }else{
            echo "Not Done";
        }
    }

?>