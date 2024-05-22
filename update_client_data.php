<?php
//  include './connect.php';
$con = mysqli_connect('localhost', 'root', '', 'db');
$id=$_GET['updateid'];
$sqlselect="SELECT * from `client`   where id =$id";
$resultselect=mysqli_query($con,$sqlselect);
$row=mysqli_fetch_assoc($resultselect);
$id = $row['id'];
$client_name = $row['client_name'];
$client_address = $row['client_address'];
$client_phone = $row['client_phone'];

if(isset($_POST['submit'])) {    
    // $id      =          $row['id'];
    //  $client_name            =      'ahmed';  
    //  $client_address         =     'adsgrg';  
    //  $sales_invoices_id      =       null ; 
    //  $client_phone           =  '011145684';      
$id                 =   $row["id"];
$client_name        =   $POST["client_name"];
$client_address     =   $POST["client_address"];
$client_phone       =   $POST["client_phone"];
$sqlupdate="UPDATE
    `client`
SET
`id` = '$id'
    `client_name` = '$client_name',
    `client_address` = '$client_address',
    `client_phone` = '$client_phone'
WHERE
   `client`.`id`=$id ";


$resultupdate = mysqli_query($con, $sqlupdate);
// $sqlupdate="UPDATE `client`SET `id`='$id' `client_name` = '$client_name', `client_address` = ' $client_address', null,`client_phone` = '$client_phone'
//   WHERE `client`.`id` = $id";
// $sqlupdate = "UPDATE `client` SET  `client_name` = '$client_name' , `client_address` = '$client_address' , `client_phone` = '$client_phone' where `id` = '$id'";
// UPDATE `employees` set employee_name='$employee_name',phone_numper='$phone_numper',emloyee_address='$emloyee_address' , user_name='$user_name' , employee_password='$employee_password' where id=$id"
//UPDATE `client` SET `id`='[value-1]',`client_name`='[value-2]',`client_address`='[value-3]',`sales_invoices_id`='[value-4]',`client_phone`='[value-5]' WHERE 1
    if ($resultupdate) {
        header('location:client_data_read.php');
    } else {
        echo "the update is false";
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
    <title>update_client_data</title>
</head>

<body class="text-white" style="background-color:  #1D3557">
    <h1 class="text-center mt-5">تعديل بيانات العملاء </h1>
    <div class="container border border-primary">
        <form action="" method="POST">
        <div class="container border border-3 mt-5">
            <div class="row mt-4">
                <div class="col-8">
                    <input class="form-control" type="text" name ="client_name" value="<?php echo $client_name?>"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;">اسم العميل</label>
            </div>
            <div class="row mt-4">
                <div class="col-8"> 
                    <input class="form-control" type="text" name ="client_phone" value="<?php echo $client_phone?>"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;">رقم الهاتف</label>
            </div>
            <div class="row mt-4">  
                <div class="col-8">
                    <input class="form-control" type="text" name ="client_address" value="<?php echo $client_address?>"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;">العنوان</label>
            </div>
            <div>
                <button type="submit" name ="submit" class="btn btn-primary mt-4 mb-3">حفظ</button>
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