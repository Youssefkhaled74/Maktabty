
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>item panal</title>
</head>


<body class="text-white" style="background-color:  #1D3557">
    <h1 class="text-center mt-4"> الاصناف </h1>
    <?php
    include 'connect.php';
if(isset($_POST['submit'])){

    $item_price = $_POST['item_price'];
    $item_name = $_POST['item_name'];
    $item_amount = $_POST['item_amount'];
    $section_id = $_POST['section_id'];
    $supplier_id = $_POST['supplier_id'];
    //  $con = new mysqli('localhost','root','','db');
    $sql = "INSERT INTO `items`(`item_price`, `item_name`, `item_amount`, `section_id`, `supplier_id`) VALUES ('$item_price','$item_name','$item_amount','$section_id','$supplier_id');";
    $insert = mysqli_query($con, $sql);
    if ($insert) { echo "User added successfully"; } 
    else { echo "feild"; }
}
?>

<?php
 $sqlselect = "SELECT * FROM `sections`";
 $sqlselect2 = "SELECT * FROM `suppliers`";
 $resultselect = mysqli_query($con, $sqlselect);
 $resultselect2 = mysqli_query($con, $sqlselect2);
?>
<form action="" method="POST"> 
    <div class="container mt-4">
        <div class="row d-flex justify-content-center border border-3">
            <div class="col-sm-2">
                <p class="text-center mt-4" id="inputGroup-sizing-default">الكميه</p>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="item_amount">
            </div>
            <div class="col-sm-2">
                <p class="text-center mt-4" id="inputGroup-sizing-default">السعر</p>
                <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="item_price">
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
                aria-describedby="inputGroup-sizing-default" name="item_name">
            </div>
            <button class="btn btn-primary col-3 mt-4 mb-3" name="submit" type="submit">اضافه الصنف</button>
        </div>

    </div>
    <img src="مكتبتى لوحو.png" class="rounded mx-auto d-block mt-5" style="width:250px;" alt="...">
    <a  href="item_data_read.php"class=" border btn btn-dark col-3 align-center mt-5" style= "margin-left:570px; " >بيانات الاصناف </a>
  
    </form>

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