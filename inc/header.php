<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
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
        <header>
            <h1 style="text-decoration: underline;"> <img src="img/logo.png" alt="logo" class="logo">My To do's</h1>
        </header>
        <form method="post" action="" >
            <div class="search-div">
                <input type="text" name="search" id="" class="search" placeholder="Add Item" required>
                <input style="border: none; background-color: transparent;" type="date" class="calendar" name="due_date" required>
                <button class="add-btn" name="submit">Add</button>
            </div>
        </form>
        <div class="horizontal-line">
            <hr style="width: 100%;">
        </div>
        <div class="sub-head">
            <div class="filter">
                <p>Filter</p>
            </div>
            <div class="filter-option">
            <form action="" method="post">
                <select name="status" id="">
                    <option value="All" name="all">All</option>
                    <option value="Completed" name="completed">Completed</option>
                    <option value="incompleted" name="incompleted">Incompleted</option>
                    </select>
                </div>
               
            </form>
            <div class="filter" style="margin-left: 200px;">
                <p>Sort</p>
            </div>
            <div class="filter-option">
            <select name="" id="">
                <option value="added">Added Date</option>
                <option value="due">Due Date</option>
    
                </select>
            </div> 
        </div>
        <div class="sub-head-tasks">
            <div class="status-desc">
                <h1>Status</h1>
            </div>
            <div class="tasks-description">
                <h1>Tasks</h1>
            </div>
            <div class="added-date-description">
                <h1>Added Date</h1>
            </div>
            <div class="due-date-description">
                <h1>Due Date</h1>
            </div>
            <div class="funtions-description">
                <h1>Options</h1>
            </div>
        </div>
        
            
    </div>
    
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

