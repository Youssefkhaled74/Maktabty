<?php
// include './connect.php';
$con = mysqli_connect('localhost', 'root', '', 'db');
$id=$_GET['updateid'];
$sqlselect="SELECT * from `suppliers` where id =$id";
$resultselect=mysqli_query($con,$sqlselect);
$row=mysqli_fetch_assoc($resultselect);
$id = $row['id'];
$name = $row['supplier_name'];
$phone = $row['supplier_phone'];


if (isset($_POST['submit'])) {
    $id = $row['id'];
    $name = $_POST['supplier_name'];
    $phone= $_POST['supplier_phone'];
    $sqlupdate = "UPDATE `suppliers` set id='$id',supplier_name='$name',supplier_phone='$phone' where id=$id";
    $resultupdate = mysqli_query($con, $sqlupdate);
    if ($resultupdate) {
        // echo '<div class="alert alert-success" role="alert"> the insert is succes </div>';
        header('location:supplier_data_read.php');
    } else {
        echo "the insert is false";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>update_supplier_data</title>
</head>

<body class="text-white" style="background-color:  #1D3557">
    <h1 class="text-center mt-5">تعديل بيانات الموردين </h1>
    <div class="container border border-primary">
        <!-- <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="name" value=>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Enter Your age" autocomplete="off" name="age" value=>
            </div>
            <div class="form-group">
                <label>Salary</label>                <input type="number" class="form-control" placeholder="Enter Your salary" autocomplete="off" name="salary" value=<>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form> -->
        <form action="" method="POST"> 
         <div class="row mt-4">
                <div class="col-8">
                    <input class="form-control" type="text" name="supplier_name" value=<?php echo $name?>></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;">name</label>
        </div>
        <div class="row mt-4">
            <div class="col-8">
                <input class="form-control" type="text"  name="supplier_phone"  value=<?php echo $phone?>></input>
            </div>
            <label class="col-2 fs-4" style="margin-left: 70px;">phone</label>
        </div>
        <div>
            <div>
                <button class="btn btn-danger col-2 mt-2 mb-3 mx-4" name ="submit" type ="submit">save</button>        
            </div>
        </div>
    </div>
 </form>
<img src="مكتبتى لوحو.png" class="rounded mx-auto d-block mt-5" style="width:250px;" alt="...">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>