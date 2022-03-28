
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Sign In</title>
        <!-- Favicon-->
        <link rel="icon" href="http://localhost/Students/assets/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="http://localhost/Students/assets/css/style.css" rel="stylesheet">
    </head>

    <body class="login-page">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Login</a>
                <small></small>
            </div>
            <div class="card">
                <div class="body">
                    <form action="login_action.php" id="sign_in" method="post" accept-charset="utf-8">
                    <div class="msg">Please login with your email/username and password below.</div>
                                                            <div class="input-group">
                        
                        <div class="form-line">
                            <input type="text" name="identity" value="" id="identity" class="form-control" placeholder="Email/Username" autofocus="1" required=""  />
                        </div>
                    </div>
                    <div class="input-group">
                        
                        <div class="form-line">
                            <input type="password" name="password" value="" id="password" class="form-control" placeholder="Password" required=""  />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">

                                                    </div>
                        <div class="col-xs-4">
                            <input type="submit" name="submit" value="Login"  class="btn btn-block bg-pink waves-effect" />
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                        </div>
                        <div class="col-xs-6 align-right">
                            
                        </div>
                    </div>
                    </form>                </div>
            </div>
        </div>

        <!-- Jquery Core Js -->
        <!-- <script src="http://localhost/Students/assets/plugins/jquery/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>

</html>