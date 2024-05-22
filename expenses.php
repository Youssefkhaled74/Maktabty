
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Expenss panal</title>
</head>


<body class="text-white" style="background-color:  #1D3557">
    <h2 class="text-center mt-2">
        المصروفات
    </h2>
    <div class="container border border-3 mt-2">
    <?php
include 'connect.php';
if(isset($_POST['submit'])){
    
    $currentDate = date('Y-m-d');
    $amount = $_POST['amount'];
    $comments = $_POST['comments'];
    $userName = $_POST['userName'];

    $sqld = " SELECT `id` FROM `employees` WHERE `user_name` = '$userName' ";

    $selectEmployee = mysqli_query($con, $sqld);

    $row = mysqli_fetch_assoc($selectEmployee);
    
    $idEmployee = $row['id'];

    echo $idEmployee;

    echo $currentDate;

    // print_r($row['id']);
    // echo $row;
    // if($selectEmployee){
    //     echo true;
    // }else{
    //     echo false;
    // }

 
// $con = new mysqli('localhost','root','','db');

    $sql = "INSERT INTO `exbensess` ( `amount` , `comments` , `date` , `employee_id` ) VALUES ( '$amount' , '$comments' , '$currentDate' , '$idEmployee' ) ";

    $insert = mysqli_query($con, $sql);
    
    if ($insert) { echo "expenses added successfully"; } 
    else { echo "feild"; }
}
?>
<form action="" method="POST">

    <div class="Form" style="margin: auto;">
        <div class="row mt-4">
            <div class="col-2" style="margin-left:760px;">
                <input class="form-control" type="text" style="width: 100px;" name="amount"></input>
            </div>
            <div class="col-2">
                
                <label class="fs-4" style="margin-right:80px;">المبلغ</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-8">
                <input class="form-control" type="text" name="comments"></input>
            </div>
            <label class="col-2 fs-4" style="margin-left: 70px;">ملحوظات</label>
        </div>
        <div class="row mt-4">
            <div class="col-8">
                <input class="form-control" type="text" name="userName"></input>
</div>  
            <label class="col-2 fs-4" style="margin-left: 70px;">اسم الموظف</label>
        </div>
        <div>
            <button class="btn btn-primary mt-4 mb-3" name="submit" type="submit" >حفظ</button>
        </div>
    </div>
</div>
</form>

<img src="مكتبتى لوحو.png" class="rounded mx-auto d-block" alt="...">





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