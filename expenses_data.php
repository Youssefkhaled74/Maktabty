
<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    # code...
    $Date = $_POST['date'];
    // echo $Date;
    $sqlAmount = " SELECT `amount` FROM `exbensess` WHERE `date` = '$Date' ";
    
    $sqlAmountQuery = mysqli_query($con, $sqlAmount);
while ($row = mysqli_fetch_assoc($sqlAmountQuery)) {
    // # code...
    global $total; 
    $one = $row['amount'];
    $total += $one;
    // print_r($row['amount']);
}
}else{
    $total="Total";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Expenses_data</title>
</head>

<body class="text-white" style="background-color:  #1D3557">
    <h1  class="text-center mt-4">المصروفات</h1>

    <form action="" method="POST">
    <div class="container border border-3">

    
        <div class="row mt-2 d-flex justify-content-center">
            <div class="col-sm-2">
                <input type="date" name="date">
            </div>
            <h5 class="col-sm-1 ">اليوم</h5>
            </div>
            <div class="mt-4 d-flex justify-content-center">
                <button class="col-1 btn btn-primary" style="width: 200px;" name="submit" type="submit">بحث</button>
            </div>
    
        </form>
        <div class="row d-flex justify-content-center mt-5 mb-3" style="margin-left:200px;">
            <div class="col-4 border border-3">
                <p class="text-center"><?php
                echo $total;?></p>
            </div>
            <div class="col-4" style="margin-left:100px;">
                <h5>   المصروفات </h5>
            </div>
        </div>
    </div>  
    <img src="مكتبتى لوحو.png" class="rounded mx-auto d-block mt-2" style="width:400px;" alt="...">
  <a  href="exbenses_data_read.php"class=" border btn btn-dark col-3 align-center mt-3" style= "margin-left:570px; " >بيانات المصروفات </a>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
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