<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>item data read</title>
    </head>
<body  class="text-white" style="background-color:  #1D3557">
    <h1 class="text-center mt-4">بيانات الموردين</h1>

    <body class="bg-secondary">
    <div class="container mt-5">
        <a class="btn btn-primary mt-5" href="./supplier.php">اضافه مورد</a>
        <table class="table mt-5  text-white">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">supplier name</th>
                    <th scope="col">supplier phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connect.php";
                $sqlselect = "SELECT * FROM `suppliers`";
                $resultselect = mysqli_query($con, $sqlselect);
                if ($resultselect) {
                    while ($row = mysqli_fetch_assoc($resultselect)) {
                        $id = $row['id'];
                        $name = $row['supplier_name'];
                        $phone = $row['supplier_phone'];
                        echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$phone.'</td>
                        <td>
                            <a href="update_supplier_data.php?updateid='.$id.'" class="btn btn-primary" >Update</a>
                            <a href="delete_supplier_data.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        ';
                    }
                }
                ?>
            </tbody>
        </table>

    </div>

















    



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