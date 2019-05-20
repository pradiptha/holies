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
            <div class="register-page rounded my-5 p-5 ">
                <div class="col-sm-auto">
                    <img src="../vendor/holies/img/holies-text.png" class="register-logo" alt="">
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
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>