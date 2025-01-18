<html>
    <head>
        <title>User Login Registration</title>
        <link rel="stylesheet" type="text/css" href="logstyle.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <style>
            #back{
               margin-left:750px;
            }
        </style>
    </head>
    <body>
    <div class="one">
    <div class="col-md-6 login-right">
    <a href="../index.php" class="btn btn-primary" id="back">Back</a>
                    <h2>Register Here</h2>
                    <form action="Registration.php" method="post">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
        </div>
        <div class="three">
        <a class="two" href="Login.php">Login</a>
        </div> 
        </div> 
    </body>
</html>