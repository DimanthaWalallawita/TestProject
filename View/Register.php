<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="col-12 d-flex align-items-center justify-content-center flex-column" style="height: 100vh; background-image: url('./Assets/Images/23xgmgrnxc031.png'); background-size: cover;">
        <h1 class="py-1" style="color: white; font-weight: 600;">Registration Page</h1>
        <div class="col-4 p-4" style="border-radius: 15px; background-color: white;">
            <form action="../Controllers/RegisterController.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" name="FirstName" id="fName" aria-describedby="emailHelp">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" name="LastName" id="lName" aria-describedby="emailHelp">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="Password" id="Password">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword">
                </div>
                <div class="form-group mt-3">
                    <label for="exampleInputPassword1">Upload Profile Picture</label>
                    <input type="file" class="form-control" name="profile" id="profile">
                </div>
                <h6 class="mt-3">Already have an account? <a href="./Login.php">Login</a></h6>
                <button type="submit" name="register" class="btn btn-success mt-3" style="width: 100%;">Register</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>