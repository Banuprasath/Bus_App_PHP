
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
                    <a class="nav-link" href="Edit.php">Edit Buses</a>
                </li>
            </ul>
        </div>
    </nav>



<?php
//-------------------------------------------CORE PHP-------------------------------------------------
$con = new mysqli("localhost","root","","busapp");

if($con->connect_error){
    echo $con->connect_error;
    die("Database connection failed");
}
else{
   // echo "Db connected Succesfully";
}


//-------------------------------------------DELETE VALUES----------------------------------------------

if(isset($_GET['did'])){
   
    
    $did=$_GET['did'];
        echo $did;
        
       $query="DELETE  FROM phpbus where id='$did'";
       $query_run=mysqli_query($con,$query);
    
    
       if($query_run){
    
            echo "<br><center>Value Delted Successfully</center>";
            header('Location: add.php');
          // print_r($student);
       }
    else{
        echo "No Data Found".mysql_error();
    }
    }


//-------------------------------------------------UPDATING VALUES-----------------------------------------

if(isset($_POST['submit'])){
    $eid=$_GET['id'];

    $frm=$_POST['frm'];
    $dep=$_POST['dep'];
    $to=$_POST['to'];
    $arr=$_POST['arr'];
    $tp=$_POST['tp'];
  //  print_r($_POST);
//echo "value stored success";
//print_r($_POST);

$sql = "UPDATE phpbus SET src='$frm' , dep='$dep', dest='$to' ,arr='$arr',`type`='$tp' where id = $eid; ";

if ($con->query($sql) === TRUE) {
    echo "<center>Updated Succesfully</center>";
    echo "<br>";
    echo "<a href='Add.php'>View</a>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}






    //--------------------------------------------EDIT VALUES-----------------------------------------------




if(isset($_GET['id'])){
    $eid=$_GET['id'];
    //echo $eid;
   // echo var_dump($eid);
   $query="SELECT *  FROM phpbus where id='$eid'";
   $query_run=mysqli_query($con,$query);


   if(mysqli_num_rows($query_run)>0){

         $val=mysqli_fetch_array($query_run);
      // print_r($student);
   }
else{
    echo "No Data Found".mysql_error();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Bus Management System</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ADEFD1FF ; /* Set your desired background color */
        }

        .navbar {
            background-color: #343a40; /* Set navbar background color */
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #fff; /* Set navbar link color */
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #fff; /* Set navbar toggle icon color */
        }

        .container {
            margin-top: 20px;
        }
form{
    height:100vh;
    border-radius:25px;
   color: #ADEFD1FF;
}
       table {
            background-color: #00203FFF;
           
            border: 1px solid;
             /* Set table background color */
       }
        th {
            background-color: #007bff; /* Set table header background color */
            color: #fff;
            font-size: 18px;
            border: 1px solid;
        }

        td {
            font-size: 16px;
            border: 1px solid;
            color:white;
        }
        td#final {
  background-color: transparent; /* Remove the background color for the "final" td */
  border: none; /* Remove the border for the "final" td */
}
    </style>
</head>


<br>
<br>
<br>
<br>
<br>
<br>

<form name='myform' method='post' class="container mt-4"  onSubmit='return validateForm()'>
  <table class="table table-bordered rounded p-3">
    <tr>
      <td>From</td>
      <td><input type='text' class="form-control" name='frm' value='<?php echo $val['src'] ?>'></td>
    </tr>
    <tr>
      <td>Departure</td>
      <td><input type="time" class="form-control" name='dep' value='<?php echo $val['dep'] ?>'></td>
    </tr>
    <tr>
      <td>To</td>
      <td><input type='text' class="form-control" name='to' value='<?php echo $val['dest'] ?>'></td>
    </tr>
    <tr>
      <td>Arrival</td>
      <td><input type='time' class="form-control" name='arr' value='<?php echo $val['arr'] ?>'></td>
    </tr>
    <tr>
      <td>Type</td>
      <td>
        <select class="form-control" name='tp'>
          <option>------Select--------</option>
          <option value='TNSTC'>TNSTC</option>
          <option value='SETC'>SETC</option>
        </select>
      </td>
    </tr>
    <tr>
        
     <td class="no-background"></td>
      <td class="text-right"><input type='submit' class="btn btn-primary" value='Submit' name='submit'>&nbsp<input type='reset' class="btn btn-secondary" name='reset'></td>
    
     
    </tr>
  </table>
</form>

<style>
    #final{
        background-color: red;
    }
</style>










<!-- MY CODE-->
<!--
<form name='myform' method='post' onSubmit='return validateForm()' >


<table border='1px'>
<tr>
    <td>From</td>
    <td><input type='text' name='frm' value='<?php echo $val['src'] ?>'>
</tr>
<tr>
    <td>Departure</td>
    <td><input type="time" name='dep'  value='<?php echo $val['dep'] ?>'>
</tr>
<tr>
    <td>To</td>
    <td><input type='text' name='to'  value='<?php echo $val['dest'] ?>'>
</tr>
<tr>
    <td>Arrival</td>
    <td><input type='time' name='arr'  value='<?php echo $val['arr'] ?>'>
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
</form>
</html>
    -->
   <?php
//-------------------------------------END CORE PHP---------------------------------------------------
}
?>





<!-- ----------------------------BOOTSTRAP-------------------------  -->
 <!-- Include Bootstrap JS and jQuery -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- Client Side Validation -->
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
