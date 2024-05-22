<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HOME</title>
   
</head>

<body style=" background-color: #1D3557;"
    class="text-white">
    <img src="مكتبتى لوحو.png" class="rounded mx-auto d-block" style="width:350px;" alt="...">
    <div>
        <div class="container">

        </div>
        <div class="container border mt-3">
    <?php
    include 'connect.php';

    if(isset($_POST['submit'])){

        $sql = "SELECT user_name , employee_password FROM employees" ;
        $selectUsernameAndPassword = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($selectUsernameAndPassword)) {
            $password = $row['employee_password'];
            $user_name = $row['user_name'];
            $enter_username = $_POST["username"];
            $enter_password = $_POST["password"];
            if( $enter_password == $password  && $enter_username == $user_name )
            {
                header("Location: http://localhost/mkproject/cashier.php");
            }
        }
        if ($enter_password != $password  && $enter_username != $user_name )
        {
            for ($i=40; $i <1 ; $i++) { 
                # code...
                echo '<h5>'.''.'</h5>';
            }   
        }

    }
    else
    {
        echo '<h5>'.'failed'.'</h5>';
    }

    // hereeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

    if(isset($_GET['submit'])){

        $sql = "SELECT user_name , employee_password FROM employees" ;
        $selectUsernameAndPassword = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($selectUsernameAndPassword)) {
            $password = $row['employee_password'];
            $user_name = $row['user_name'];
            $enter_username = $_GET["username"];
            $enter_password = $_GET["password"];
            if( $enter_password == $password  && $enter_username == $user_name )
            {
                header("Location: http://localhost/mkproject/admin.php");
            }
        }
        if ($enter_password != $password  && $enter_username != $user_name )
        {
            for ($i=0; $i <1 ; $i++) { 
                # code...
                echo '<h5>'.'the password or username is incorrect'.'</h5>';
            }
        }

    }
    else
    {
        echo '<h5>'.'failed'.'</h5>';
    }
    ?>

   <p for="staticEmail" class=" mt-3 fs-2">Cashier</p>
    <form action="home.php" method="POST">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                 <div class="col-sm-2">
                     <input class="form-control" name="username">
                 </div>
             </div> 
             <div class="mb-3 row">
                 <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                 <div class="col-sm-2">
                     <input type="password" class="form-control" name="password">
                 </div>
                 <button class="btn btn-primary col-sm-1" type="submit" name="submit">Submit</button>
             </div>
            </form>
        </div>
        <div class="container border mt-3">
            <p for="staticEmail" class=" mt-3 fs-2">Admin</p>
           <form action="home.php" method="GET">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
                 <div class="col-sm-2">
                     <input class="form-control" name="username">
                 </div>
             </div> 
             <div class="mb-3 row">
                 <label for = "inputPassword" class = "col-sm-2 col-form-label">Password</label>
                 <div class = "col-sm-2">
                     <input type = "password" class = "form-control" name = "password">
                 </div>
                 <button class="btn btn-primary col-sm-1" type="submit" name="submit">Submit</button>
             </div>
            </form>
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