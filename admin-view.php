<?php
/*
$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
    echo "Db connected Succesfully";
}
?>


<form name='myform' method='post'>

From:<input type='text' placeholder='From' name='frm'></br>
To:<input type='text' placeholder='To' name='to'></br>
<input type='submit' value='submit' name='submit'></br>

</form>
<table border='1px'>
    <tr>
        <th>From</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Arrival</th>
        <th>Type</th>
</tr>
<?php


if(!isset($_POST['submit'])){
    $sql="select * from phpbus";
    $result=$con->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
    
            echo "<tr>";
           
            echo "<td>".$row["src"]."</td>";
          
            echo "<td>".$row["dep"]."</td>";
            echo "<td>".$row["dest"]."</td>";
            echo "<td>".$row["arr"]."</td>";
            echo "<td>".$row["type"]."</td>";
            ?>
        <td>  <a href='edit.php?id=<?php echo $row["id"]; ?>'>View</a></td>
        <td>  <a href='edit.php?did=<?php echo $row["id"]; ?>'>Delete</a></td>
            <?php
            echo "</tr>";
        }
    }
    }





if(isset($_POST['submit'])){
    $frm=$_POST['frm'];
    $to=$_POST['to'];

    $sql="select * from phpbus where src LIKE '%$frm%' and dest LIKE '%$to%'; ";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

        echo "<tr>";
       
        echo "<td>".$row["src"]."</td>";
      
        echo "<td>".$row["dep"]."</td>";
        echo "<td>".$row["dest"]."</td>";
        echo "<td>".$row["arr"]."</td>";
        echo "<td>".$row["type"]."</td>";

        ?>
         <td>  <a href='edit.php?id=<?php echo $row["id"]; ?>'>View</a></td>
    <td>  <a href='edit.php?did=<?php echo $row["id"]; ?>'>Delete</a></td>
        <?php
        echo "</tr>";
    }
}




}



*/

//--------------------------------ITHUKU MELA KAI VECHUKO-------------------------
?>

<style>
    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    form {
        margin: 20px auto;
        max-width: 400px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #009E60;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #00b300;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
        width: 100%;
    }

    th {
        background-color: #007bff;
        color: #fff;
        font-size: 20px;
    }

    td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
        font-size: 18px;
    }

    .alert {
        padding: 10px;
        background-color: #f44336;
        color: white;
        text-align: center;
        border-radius: 5px;
    }

    .btn-link {
        color: #007bff;
        text-decoration: none;
    }

    .btn-link:hover {
        text-decoration: underline;
    }

    #ndf {
        color: red;
    }

</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bus Management System</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">BP Creations</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Add.php">Add New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-view.php">Edit Buses</a>
                </li>
            </ul>
        </div>
    </nav>
<?php

$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
    //echo "Db connected Succesfully";
}
?>
<div id='road'>

<form name='myform' method='post'>

From:<input type='text' placeholder='From' name='frm'></br>
To:<input type='text' placeholder='To' name='to'></br>
<input type='submit' value='submit' name='submit'></br>
</div>
</form>
<table border='1px' class="table table-striped">
    <tr>
        <th>From</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Arrival</th>
        <th >Type</th>
        <th colspan='2'>Actions</th>
</tr>
<?php


if(!isset($_POST['submit'])){
    $sql="select * from phpbus";
    $result=$con->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
    
            echo "<tr>";
           
            echo "<td>".$row["src"]."</td>";
          
            echo "<td>".$row["dep"]."</td>";
            echo "<td>".$row["dest"]."</td>";
            echo "<td>".$row["arr"]."</td>";
            echo "<td>".$row["type"]."</td>";
            ?>
        <td>  <a href='edit.php?id=<?php echo $row["id"]; ?>'>Edit</a></td>
        <td>  <a href='edit.php?did=<?php echo $row["id"]; ?>'>Delete</a></td>
            <?php
            echo "</tr>";
        }
    }
    }





if(isset($_POST['submit'])){
    $frm=$_POST['frm'];
    $to=$_POST['to'];

    $sql="select * from phpbus where src LIKE '%$frm%' and dest LIKE '%$to%'; ";
$result=$con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

        echo "<tr>";
       
        echo "<td>".$row["src"]."</td>";
      
        echo "<td>".$row["dep"]."</td>";
        echo "<td>".$row["dest"]."</td>";
        echo "<td>".$row["arr"]."</td>";
        echo "<td>".$row["type"]."</td>";

        ?>
         <td>  <a href='edit.php?id=<?php echo $row["id"]; ?>'>Edit</a></td>
    <td>  <a href='edit.php?did=<?php echo $row["id"]; ?>'>Delete</a></td>
        <?php
        echo "</tr>";
    }
}




}




?>
