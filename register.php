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
    <form method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="exampleInputUserName1">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputUserName1" placeholder="Username" required>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="exampleInputFirstName1">First Name</label>
            <input type="text" class="form-control" id="exampleInputLastName1" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputLastName1">Last Name</label>
            <input type="text" class="form-control" id="exampleInputLastName1" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>