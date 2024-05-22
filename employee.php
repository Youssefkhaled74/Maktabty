

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Employee</title>
</head>

<body class="text-white" style="background-color:  #1D3557">

    <div class="container">
    <?php
include 'connect.php';

if(isset($_POST['submit'])){

    $employee_name = $_POST["employee_name"];
    $phone_numper = $_POST["phone_numper"];
    $emloyee_address = $_POST["emloyee_address"];
    $user_name = $_POST["user_name"];
    $employee_password = $_POST["employee_password"];

    $con = new mysqli('localhost','root','','db');

    $sql = "INSERT INTO `employees` (`id`, `employee_name`, `emloyee_address`, `phone_numper`, `user_name`, `employee_password`) 
    VALUES ( NULL , '$employee_name' , '$phone_numper', '$emloyee_address', '$user_name', '$employee_password' )";


    $insert = mysqli_query($con, $sql);
    
    
    if ($insert) { echo "employee added successfully"; } 
    else { echo "ffff"; }
}
?>

        <form action="" method="POST">
        <h1 class="text-center mt-3">الموظفين</h1>
        <div class="container border border-6 mt-5">
            <div class="row mt-3">
                <div class="col-8">
                    <input class="form-control" type="text" name ="employee_name"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;">اسم الموظف</label>
            </div>
            <div class="row mt-4">
                <div class="col-8">
                    <input class="form-control" type="text" name="phone_numper"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;" >رقم الهاتف</label>
            </div>
            <div class="row mt-4">
                <div class="col-8">
                    <input class="form-control" type="text" name="emloyee_address"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;"  >العنوان</label>
            </div>
            <div class="row mt-4">
                <div class="col-8">
                    <input class="form-control" type="text" name="user_name"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;">اسم المستخدم</label>
            </div>
            <div class="row mt-4">
                <div class="col-8">
                    <input class="form-control" type="text" name="employee_password"></input>
                </div>
                <label class="col-2 fs-4" style="margin-left: 70px;">كلمه المرور </label>
            </div>
            <div>
                <button class="btn btn-primary mt-4 mb-3" name="submit" type="submit">اضافه</button>
            </div>
        </form>


        </div>

    </div>

    <img src="مكتبتى لوحو.png" class="rounded mx-auto d-block mt-2" style="width:250px;" alt="...">
  <a  href="employee_data_read.php"class=" border btn btn-dark col-3 align-center mt-3" style= "margin-left:570px; " >بيانات الموظفين </a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>