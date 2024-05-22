<?php
include 'connect.php';
if (isset($_POST['submitaa'])) {
                    $enterItemName = $_POST['itemName'];
                    $sqlItemName = " SELECT `item_price` FROM `items` WHERE `item_name` = '$enterItemName' ";
                    $sqlGetPrice = mysqli_query($con, $sqlItemName);
                    $row2 = mysqli_fetch_assoc($sqlGetPrice);
                    if ($sqlGetPrice) {
                        true ;
                    } else {
                        false ;
                    }
                    $Price =  $row2['item_price'];
                    // print_r($row2);
                    # code...
                // }else if(isset($_POST['count'])){
                //     $count = $_POST['nCount'];
                }
                else{
                    $count = Null;
                    $Price = "Item price";
                    $enterItemName = "Item name";
                }
?>