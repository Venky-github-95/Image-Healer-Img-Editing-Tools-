<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Image Healer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="shortcut icon" type="text/css" href="http://youtube.local/assets/favicon.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
       .container {
  width: 100%;
}

.container-1,
.container-2,
.container-3,
.container-4 {
  float: left;
  width: 50%;
  height: 300px;
  border:2px solid black;
}

.container-1 {
  /*background-color: red;*/
  background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
}

.container-2 {
  /*background-color: blue;*/
  background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
}

.container-3 {
  /*background-color: green;*/
  background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
}

.container-4 {
  /*background-color: yellow;*/
  background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
}
.nav-link{
  font-size: 20px;
}
.head{
  padding-left: 480px;
  color: white;
  font-weight: bold;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 30px;
}
#icon{
 padding-bottom: 14px;
}
.back{
  background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);
  /*display: block;*/
  background-size: cover;
}

    </style>
</head>
<body class="back">
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="gifs/img_heal.png" alt="" height="60px" width="60px" id="icon"></a>
        <h2 class="head">Image Healer</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="login_form/Login.php"><b>Login</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login_form/LogReg.php"><b>Sign up</b></a>
            </li>
          </ul>
        </div>
      </nav>
      
    <div class="container">
        <div class="container-1">
          <div class="thumbnail">
            <a href="login_form/LogReg.php" target="_blank">
               <img src="gifs/crop.gif" alt="Lights" style="width:63%;background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
               <div class="caption">
                 <p><center><b>Cropper</b></center></p>
               </div>
             </a>
           </div>
     
        </div>
        <div class="container-2">
          <div class="thumbnail">
            <a href="login_form/LogReg.php" target="_blank">
               <img src="gifs/hw.gif" alt="Lights" style="width:78%;background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);" height="100px" width="100px">
               <div class="caption">
                 <p><center><b>Resizer</b></center></p>
               </div>
             </a>
           </div>
        </div>
        <div class="container-3">
          <div class="thumbnail">
            <a href="login_form/LogReg.php" target="_blank">
               <img src="gifs/filters.gif" alt="Lights" style="width:74%;background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);" height="100px" width="100px">
               <div class="caption">
                 <p><center><b>Filters Adjustment</b></center></p>
               </div>
             </a>
           </div>
        </div>
        <div class="container-4">
          <div class="thumbnail">
            <a href="login_form/LogReg.php" target="_blank">
               <img src="gifs/jpgtopdf.gif" alt="Lights" style="width:100%;background-image: linear-gradient(to right bottom, #051937, #004d7a, #008793, #00bf72, #a8eb12);" >
               <div class="caption">
                 <p><center><b>JPG To PDF</b></center></p>
               </div>
             </a>
           </div>
      </div>
      </div>
      
</body>
</html>