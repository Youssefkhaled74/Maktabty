<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>sales invoices panal</title>
</head>
<body class="text-white" style="background-color:#1D3557">
    

   
<div class="border border-3 mt-2 ">
            <div class="row text-center mt-4">
                <?php
                session_start();
                // $counter ;
                if (isset($_POST['submit'])) {                                
                        $enterName = $_POST['clientname'];
                        $sqlClientName = " SELECT `client_phone` , `client_address` ,`id` FROM `client` WHERE `client_name` = '$enterName' ";
                        $selectClient = mysqli_query ( $con , $sqlClientName);
                        $row = mysqli_fetch_assoc($selectClient);
                        $clientId = $row['id'];
                        $enterItemName = $_POST['itemName'];
                        $sqlItemName = " SELECT `item_price` ,`id` FROM `items` WHERE `item_name` = '$enterItemName' ";
                        $sqlGetPrice = mysqli_query($con, $sqlItemName);
                        $row2 = mysqli_fetch_assoc($sqlGetPrice);
                        $Price =  $row2['item_price'];
                        $itemId =  $row2['id'];
                        $count = $_POST['nCount'];
                        // ++$_SESSION['counter'];
                        $khedma =$_POST['khedma'];
                        $khasm =$_POST['khasm'];
                        $result = (int)$count * (int)$Price;
                        $currentDates = date('Y-m-d');
                        $sqlInsertInvoces = "INSERT INTO `sales_invoices` ( `discount`, `date`, `amount`, `total`, `client_id`, `item_id`) VALUES ( '$khasm' , '$currentDates' , '$count' , '$result' ,'$clientId' , '$itemId' );";
                        $insertNewInvoces = mysqli_query($con, $sqlInsertInvoces);

                    }else{
                        $enterName = "client name";
                        $row['client_phone'] = "client phone";
                        $row['client_address'] = "client address";
                        $count = Null;
                        $Price = "Item price";
                        $enterItemName = "Item name";
                        $result =null;
                        $khasm=null;
                        $khedma=null;
                        $clientId = Null;
                        $itemId = Null;

                    }                            
                                    ?>
           
                <form action="" method="POST">
            <div class="col-6"  style="margin-left: 350px;">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">اسم العميل</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  name ="clientname">
                </div>
            </div>
            <!-- <div class="col-2">
                
            </div> -->
        </div>
        <div class="mt-1" style="margin-left: 350px;">
            <p class="col-8 fs-5 border border-3"><?php echo $enterName;?></p>
            <p class="col-8 fs-5 border border-3"><?php echo $row['client_address'];?></p>
            <p class="col-8 fs-5 border border-3"><?php echo $row['client_phone'];?></p>
        </div>
        <div class="row">
               <!-- <form action="" method="POST"> -->
               <div class="col-6"  style="margin-left: 350px;">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">اسم الصنف</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" name = "itemName">
                    </div>
                </div>
                <!-- <div class="col-2">
                    <button class="btn btn-primary" type="submitaa" name="submitaa">add</button>
                </div> -->
            <!-- </form> -->
        </div>
        <div class="row">
            <div class="col-2" style="margin-top: 200px;">
                <div class="mt-4">
                <div class="input-group mb-2"  style="margin-left: 10px;">
                <p class="fs-5 border border-3" >
    After service 
                    <?php 
             
                                             echo  $SgrandTotal = (int)$result + (int)$khedma; 
                ?></p>
                <p class="fs-5 border border-3" >
                    After Rival
                    <br>
                    <?php
   
                                             echo $RgrandTotal = (int)$result - (int)$khasm ;
                ?></p>
                    </div>

                        <div class="input-group mb-2"  style="margin-left: 10px;">
                            <span class="input-group-text" id="inputGroup-sizing-default">الخدمه</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" name="khedma">
                        </div>
                        <div class="input-group mb-2 mt-2" style="margin-left: 10px;">
                            <span class="input-group-text" id="inputGroup-sizing-default">الخصم</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" name = "khasm">
                        </div>
                </div>
                <button class="btn btn-primary btn btn-primary fs-3 w-100 mb-3" type="submit" style="margin-right: 160px;" name = "submit">بيع</button>
            </div>
            <div class="col-10">
                <div class="border border-3 mb-3" style="width: 850px;">
                    <div class="container">
                    <form action="" method="POST">
                    <input type="" name = "nCount">
                    </form>
                    <table class="table mt-5  text-white">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">amonut</th>
                    <th scope="col">discount</th>
                    <th scope="col">total</th>
                    <th scope="col">date</th>
                </tr>
            </thead>
                    <?php
                        // echo $clientId;
                        // echo $itemId;
                        $sql_select_data = "SELECT * FROM sales_invoices WHERE `client_id` = '$clientId' and `item_id` = '$itemId'";
                        $dd = mysqli_query($con, $sql_select_data);
                        // $rowdd = mysqli_fetch_assoc($dd);
                        // print_r($rowdd);
                        while ($rowdd = mysqli_fetch_assoc($dd)) {
                            $id = $rowdd['id'];
                            $amount = $rowdd['amount'];
                            $discount = $rowdd['discount'];
                            $total = $rowdd['total'];
                            $date = $rowdd['date'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$amount.'</td>
                            <td>'.$discount.'</td>
                            <td>'.$total.'</td>
                            <td>'.$date.'</td>
                            </tr>
                            ';
                        }
                    ?>
                    </table>

                        <?php
                            # code...
                            $result = (int)$count * (int)$Price;
                            // echo $result;
                            // for ($i=0; $i <$_SESSION['counter'] ; $i++) { 
                                echo'<div class="col-6">
                                <p class="fs-5 border border-3">
                            '.$result.'
                            </p>
                            <p class="fs-5 border border-3">
                            '.$enterItemName.'
                            </p>
                            <p class="fs-5 border border-3">
                            '.$Price.'
                            </p>
                            <p class="fs-5 border border-3">
                            '.$count.'
                            </p>
                            </div>';
                            // }
                            ?>


       <?php
        // echo $_SESSION['counter'];
       if (isset($_POST['reset'])) {
        // # code...
        $_SESSION['counter'] = 0;
       }  
       ?>
       <form action="" method="POST">
        <button name="reset" class="btn btn-danger">reset</button>
       </form>
                        <!-- <div class="row mt-3"> -->
                            <!-- <form action="" method="POST"> -->
                                <!-- <div class="col-6"> -->
                                    <!-- <input type="" name = "nCount"> -->
                                    <!-- <p class="fs-5 border border-3" ><?php
                                    // $result = (int)$count * (int)$Price;
                                    // echo $result;
                                // echo $count   ;                              
                                ?>
                                <!- </p> -->
                            <!-- </div> -->
                        <!-- </form> -->
                            <!-- <div class="col-6"> -->
                                <!-- <p class="fs-5 border border-3" ><?php
                                //  echo $enterItemName
                                 ?></p> -->
                                <!-- <p class="fs-5 border border-3" ><?php 
                                // echo $Price
                                ?></p> -->
                                <!-- <p class="fs-5 border border-3" ><?php 
                                // echo $count
                                ?></p> -->
                            <!-- </div> -->
                        <!-- </div> -->
            </div>
            </form>
                </div>
            </div>
        </div>
    </div>
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
</html>