<?php
// if (isset($_POST['submit'])) {
//     var_dump($_POST);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOLIES - House of Livestock</title>
    <link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/holies/css/index.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="register-page rounded my-5 p-5 shadow">
                <div class="col-sm-auto">
                    <a href="/holies"><img src="../vendor/holies/img/holies-text.png" class="register-logo" alt=""></a>
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" value="true">
                            <label class="form-check-label" for="remember">Remember Me!</label>
                        </div>
                        <button data-target="#loginfailed" type="submit" class="btn btn-success" name="submit">Submit</button>
                        <!-- <div class="form-group form-check"> -->
                        <div class="mt-5 mx-auto text-center text-decoration-none mb-n4">
                            <small class="form-check-label" style="">Belum punya akun?</small>
                            <small class="form-check-label" style=""><a href="register.php">Register disini</a></small>
                        </div>
                        <!-- </div> -->

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include "../php/config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user where username='$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $tingkatan = $data["tingkatan"];
    if ($data) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['id'] = $data['id_user'];
        // echo $tingkatan;
        if ($tingkatan === "customer") {
            // echo "customer";
            $_SESSION['type'] = $tingkatan;
            header("location: index.php");
        } else if ($tingkatan === "seller") {
            // echo "seller";
            $_SESSION['type'] = $tingkatan;
            header("location: ../seller/index.php");
        }
    } else {
        // header("location: login.php");
    }
}
?>