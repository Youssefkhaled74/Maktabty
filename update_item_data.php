<?php
// include './connect.php';
$con = mysqli_connect('localhost', 'root', '', 'db');
$id=$_GET['updateid'];
$sqlselect = "SELECT * from `items` where id = $id";
$resultselect=mysqli_query($con,$sqlselect);
$row=mysqli_fetch_assoc($resultselect);
$id = $row['id'];
$item_price = $row['item_price'];
$item_name = $row['item_name'];
$item_amount =  $row['item_amount'];
$section_id =  $row['section_id'];
$supplier_id =  $row['supplier_id'];


if (isset($_POST['submit'])) {
    $id = $row['id'];
    $item_price = $row['item_price'];
    $item_name = $row['item_name'];
    $item_amount =  $row['item_amount'];
    $section_id =  $row['section_id'];
    $supplier_id =  $row['supplier_id'];

    $sqlupdate = " UPDATE `items` set `id` = '$id' , `item_price` = '$item_price',`item_amount`='$item_amount',`section_id`='$section_id',`supplier_id`='$supplier_id' where `id`=$id";
    $resultupdate = mysqli_query($con, $sqlupdate);
    if ($resultupdate) {
        // echo '<div class="alert alert-success" role="alert"> the insert is succes </div>';
        header('location:item_data_read.php');
    } else {
        echo "the insert is false";    
    }
}
?>

<?php
 $sqlselect = "SELECT * FROM `sections`";
 $sqlselect2 = "SELECT * FROM `suppliers`";
 $resultselect = mysqli_query($con, $sqlselect);
 $resultselect2 = mysqli_query($con, $sqlselect2);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>CURD operation</title>
</head>

<body class="text-white" style="background-color:  #1D3557">
    <h1 class="text-center mt-5">ADD YOUR STAFF</h1>
    <div class="container border border-primary">
        <!-- <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="name" value=<?php echo $name?>>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Enter Your age" autocomplete="off" name="age" value=<?php echo $age?>>
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" class="form-control" placeholder="Enter Your salary" autocomplete="off" name="salary" value=<?php echo $salary?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form> -->
        <form action="" method="POST"> 
    <div class="container mt-4">
        <div class="row d-flex justify-content-center border border-3">
            <div class="col-sm-2">
                <p class="text-center mt-4" id="inputGroup-sizing-default">الكميه</p>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="item_amount" value=<?php echo $item_amount?> >
            </div>
            <div class="col-sm-2">
                <p class="text-center mt-4" id="inputGroup-sizing-default">السعر</p>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="item_amount" value=<?php echo $item_price?>>
            </div>
     
            <div class="col-2 ">
                <p class="text-center mt-4" id="inputGroup-sizing-default">المورد</p>
                <select type="number" class="form-select" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="supplier_id">
                <?php
                while ($row = mysqli_fetch_assoc($resultselect2)) {
                $supplierName = $row ['supplier_name'];
                $supplierId = $row ['id'];
                echo'<option value="'.$supplierId.'">';
                echo $supplierName;           
                echo '</option>';
                }          
                ?>
                </select>
            </div>
            <div class="col-2 ">
                <p class="text-center mt-4" id="inputGroup-sizing-default">القسم</p>
                <select type="number" class="form-select" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="section_id">
                <?php
                while ($row = mysqli_fetch_assoc($resultselect)) {
                $sectionName = $row ['section_name'];
                $sectionId = $row ['id'];
                echo'<option value="'.$sectionId.'">';
                echo $sectionName;           
                echo '</option>';
                }          
                ?>
                </select>
            </div>
            <div class="col-2">
                <p class="text-center mt-4" id="inputGroup-sizing-default">اسم الصنف</p>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="item_name" value=<?php echo $item_name?> >
            </div>
            <button class="btn btn-primary col-3 mt-4 mb-3" name="submit" type="submit">اضافه الصنف</button>
        </div>

    </div>
    <img src="مكتبتى لوحو.png" class="rounded mx-auto d-block mt-5" style="width:250px;" alt="...">
  
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>