<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="search-div">
            <input type="text" name="search" id="" class="search" placeholder="Add Item">
            <input style="border: none; background-color: transparent;" type="date" class="calendar">
            <button class="add-btn">Add</button>
        </div>
        <div class="horizontal-line">
            <hr style="width: 100%;">
        </div>
        <div class="sub-head">
            <div class="filter">
                <p>Filter</p>
            </div>
            <div class="filter-option">
            <select name="" id="">
                <option value="All">All</option>
                <option value="Completed">Completed</option>
                <option value="incompleted">Incompleted</option>
                </select>
            </div>
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
            <div class="tasks-description">
                <p>Tasks</p>
            </div>
            <div class="added-date-description">
                <p>Added Date</p>
            </div>
            <div class="due-date-description">
                <p>Due Date</p>
            </div>
            <div class="funtions-description">
                <p>Options</p>
            </div>
        </div>
        
            
            
        

    </div>
    
</body>
</html>