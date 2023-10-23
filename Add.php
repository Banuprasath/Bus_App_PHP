
<head>
    
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>

#alert {
            margin: 0;
            padding: 10px;
        }

        .toast{
     position: fixed;
     bottom: 0;
     right: 0;
    background-color:#50C878;
    }
</style>

<?php

$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
    //echo "Db connected Succesfully";
}

if(isset($_POST['submit'])){

    $frm=$_POST['frm'];
    $dep=$_POST['dep'];
    $to=$_POST['to'];
    $arr=$_POST['arr'];
    $tp=$_POST['tp'];


    if(strtolower($frm)==strtolower($to)){
        echo '<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Alert!</strong> The Starting and Ending Point cant"t be Same!!!!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

    else{
        
$sql = "INSERT INTO phpbus (src,dep,dest,arr,`type`) VALUES ('$frm', '$dep','$to','$arr','$tp')";

if ($con->query($sql) === TRUE) {
    echo '<div role="alert" aria-live="assertive" aria-atomic="true" class="toast text-success" data-autohide="false">
    <div class="toast-header">
      <!--<img src="..." class="rounded mr-2" alt="...">-->
      <strong class="mr-auto">BusApp</strong>
      <small>Now</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      New Data Added Succesfully 
    </div>
  </div>';
    // echo "<center>New record created successfully</center>";
    echo '<script>
    $(document).ready(function() {
        $(".toast").toast("show");
    });
</script>';


} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
    }
//echo "value stored success";
//print_r($_POST);

}






?>

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
                    <a class="nav-link" href="index.php">Home</a>
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




<!--
<form name='myform' method='post' >


<table>
<tr>
    <td>From</td>
    <td><input type='text' name='frm'>
</tr>
<tr>
    <td>Departure</td>
    <td><input type="time" name='dep'>
</tr>
<tr>
    <td>To</td>
    <td><input type='text' name='to'>
</tr>
<tr>
    <td>Arrival</td>
    <td><input type='time' name='arr'>
</tr>
<tr>
    <td>Type</td>
    <td><Select name='tp'>
    <option>------Select--------</option>
        <option value='TNSTC'>TNSTC</option>
        <option value='SETC'>SETC</option>
</select></td>
</tr>
<tr>
    <td><input type='submit' valu='submit' name='submit'></td>
    <td><input type='reset' name='reset' >
</tr>
</table>

-->



<div class="container mt-5">
        <h3 class="text-center">Add a New Bus Route</h3>
        <form name='myform' method='post' onSubmit='return validateForm()'>
            <div class="form-group row">
                <label for="frm" class="col-sm-2 col-form-label">From</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control" id="frm" name='frm'>
                </div>
            </div>
            <div class="form-group row">
                <label for="dep" class="col-sm-2 col-form-label">Departure</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" id="dep" name='dep'>
                </div>
            </div>
            <div class="form-group row">
                <label for="to" class="col-sm-2 col-form-label">To</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control" id="to" name='to'>
                </div>
            </div>
            <div class="form-group row">
                <label for="arr" class="col-sm-2 col-form-label">Arrival</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" id="arr" name='arr'>
                </div>
            </div>
            <div class="form-group row">
                <label for="tp" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <select class="form-control" id="tp" name='tp' class="required">
                        <option>------Select--------</option>
                        <option value='TNSTC'>TNSTC</option>
                        <option value='SETC'>SETC</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <input type='submit' class="btn btn-primary" value='Submit' name='submit'>
                    <input type='reset' class="btn btn-secondary" name='reset'>
                </div>
            </div>
        </form>
    </div>













<a href='admin-view.php'>View</a>

</form>
</html>
<center>
    <h3>Last 5 Inserted Records</h3>
<table class='table table-dark table-striped table-hover' border='1px'>


    <tr>
        <th>From</th>
        <th>Departure</th>
        <th>Destignation</th>
        <th>Arrival</th>
        <th>Type</th>
        <th colspan=2>     Actions</th>
       
    </tr>
<?php

$sql="SELECT * FROM `phpbus` order by id DESC LIMIT 5 ";
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


?>

<script>
    function validateForm() {
    var frm = document.forms["myform"]["frm"].value;
    var dep = document.forms["myform"]["dep"].value;
    var to = document.forms["myform"]["to"].value;
    var arr = document.forms["myform"]["arr"].value;
    var tp= document.myform.tp;

   // var isValid = true;

    // Check if any of the fields is empty
    if (frm == "") {
        alert("Enter the starting Point");
        isValid = false;
        return false;
    }

    if (dep === "") {
        alert("Departure field must be filled out");
        isValid = false;
        return false;
    }

    if (to === "") {
        alert("Destination  field must be filled out");
        isValid = false;
        return false;
    }

    if (arr === "") {
        alert("Arrival Time must be filled out");
        isValid = false;
        return false;
    }

    if ( tp.selectedIndex=="0")
	{
 	alert("please choose the Type");
  	//st.focus();  
   
	return false;
	}

    return true;
}

</script>