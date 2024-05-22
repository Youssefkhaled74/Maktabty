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
    <h1 class="text-center mt-4">بيانات الاصناف</h1>

    <body class="bg-secondary">
    <div class="container mt-5">
        <a class="btn btn-primary mt-5" href="./items.php">Add user</a>
        <table class="table mt-5  text-white">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">item price</th>
                    <th scope="col">item name</th>
                    <th scope="col">item amount</th>
                    <th scope="col">section id</th>
                    <th scope="col">supplier id</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connect.php";
                $sqlselect = "SELECT * FROM `items`";
                $resultselect = mysqli_query($con, $sqlselect);
                if ($resultselect) {
                    while ($row = mysqli_fetch_assoc($resultselect)) {
                        $id = $row['id'];
                        $item_price = $row['item_price'];
                        $item_name = $row['item_name'];
                        $item_amount =  $row['item_amount'];
                        $section_id =  $row['section_id'];
                        $supplier_id =  $row['supplier_id'];
                        echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$item_price.'</td>
                        <td>'.$item_name.'</td>
                        <td>'.$item_amount.'</td>
                        <td>'.$section_id.'</td>
                        <td>'.$supplier_id.'</td>
                        <td>
                            <a href="update_item_data.php?updateid='.$id.'" class="btn btn-primary" >Update</a>
                            <a href="delete_item_data.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        ';
   
                    }
                }
                ?>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->
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