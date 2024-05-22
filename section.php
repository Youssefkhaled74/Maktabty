

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Section panal</title>
</head>

<body class="text-white" style="background-color:  #1D3557"></body>

<div class="container">

<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $section_name = $_POST['section_name'];
 
    //  $con = new mysqli('localhost','root','','db');

    $sql = "INSERT INTO `sections` (`id`, `section_name`) 
    VALUES ( NULL , '$section_name')";


    $insert = mysqli_query($con, $sql);
    
    if ($insert) { echo " section added successfully"; } 
    else { echo "feild"; }
}
?>
    <h1 class="text-center mt-4">الاقسام</h1>
    <div class="container border border-6 mt-5">
    <form action="" method="POST"> 
        <div class="row mt-4">
            <div class="col-8">
                <input class="form-control" type="text"  name="section_name"></input>
            </div>
            <label class="col-2 fs-4" style="margin-left: 70px;">اسم القسم</label>
        </div>
        <div>
            <button class="btn btn-primary mt-4 mb-3" name="submit" type="submit">اضافه</button>
        </div>
    </form>
    </div>
    <img src="مكتبتى لوحو.png" class="rounded mx-auto d-block mt-5" style="width:250px;" alt="...">
    <a  href="section_data_read.php"class=" border btn btn-dark col-3 align-center mt-5" style= "margin-left:490px; " >بيانات الاقسام  </a>
 
























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>