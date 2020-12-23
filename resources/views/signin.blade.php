<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/sign.css">
    <title>Sign In your Account</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="signin-form pt-5">
                <form action="" method="">
                    <div class="form-header">
                        <h2>Sign In</h2>
                        <p>Login to Blog Post</p>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="someonesite@gmail.com"
                               autocomplete="off"
                               required/>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password"
                               autocomplete="off" required/>
                    </div>
                    <br>
                    <div class="small">Forgot Password? <a href="#">Click Here</a></div>
                    <br>
                    <div class="form-group pb-2">
                        <input type="button" name="sign_in" class="btn btn-lg form-control" value="Sign In">
                    </div>
                </form>
                <div class="text-center small" style="color:#67428B;">
                    Don't have an account? <a href="#">Create Once</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>