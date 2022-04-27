<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body>
    <nav class="nav nav-pills justify-content navbar navbar-dark bg-secondary">
        <a class="text-sm-center nav-link active navbar-brand" aria-current="page" href="index.php">Welcome to HTMLhelp</a>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-sm-left nav-link active navbar-brand" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Sign In/Register</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sign In</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="register.php">Register</a></li>
            </ul>
        </li>
    </nav>
    <h1>
        <center>Please enter your information to register an account</center>
    </h1>

    <form method="post">
        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputUserName1">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputUserName1" placeholder="Username" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputPassword1">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputFirstName1">First Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputLastName1" placeholder="First Name" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputLastName1">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputLastName1" placeholder="Last Name" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputEmail1">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputAddress1">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputAddress1" placeholder="Address" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputCity1">City:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="City" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputState1">State:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputState1" placeholder="State" required>
            </div>
        </div>

        <div class="form-group row" style="padding-top: 1em">
            <label class="col-sm-2 col-form-label" style="padding-left: 5em" for="exampleInputZipCode1">Zip Code:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputZipCOde1" placeholder="Zip Code" required>
            </div>
        </div>

        <br>
        <div style="padding-left: 13.5em;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>