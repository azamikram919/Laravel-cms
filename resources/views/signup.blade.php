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
    <title>Create New Account</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="signup-form pt-5">
                <form action="" method="">
                    <div class="font">
                        <h2>Sign Up</h2>
                        <p class="p">Fill out this form and start checkout Posts</p>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Example: Zam"
                               autocomplete="off"
                               required/>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Example: Moozi"
                               autocomplete="off"
                               required/>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="user_name" placeholder="Example: zammoozi"
                               autocomplete="off"
                               required/>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="user_email" placeholder="someonesite@gmail.com"
                               autocomplete="off"
                               required/>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="user_pass" placeholder="Password"
                               autocomplete="off" required/>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" required><span>I accept the</span> <a href="#">
                                Terms od Use
                            </a>
                            &amp; <a href="#">
                                Privacy Policy
                            </a>
                        </label>
                    </div>
                    <br>
                    <div class="form-group pt-2 pb-2">
                        <input type="button" name="sign_up" class="btn btn-block form-control" value="Sign Up">
                    </div>
                </form>
                <div class="text-center small" style="color:#67428B;">
                    Already have an account? <a href="#">Signin Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>