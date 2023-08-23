<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>forget password</title>
    <style>
body{
    justify-content: center;
}
.nk{
    background-color: whitesmoke;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 0.5px solid;
    width:50%;
    margin-left: 30%;
    margin-top:5%;  
   
 
}   
.heading{
    display: flex;
    justify-content: center;
    margin-top:2%;
}
button{
    display:flex;
    width:20%;
    justify-content: center;
    justify-items: center;
}
    
    </style>
</head>
<body>
   <div class="heading"> <h5> <i>forget your password?</i></h5></div>
    <div class="nk">
<div class="mb-3 row justify-content-center">
<div class="col-sm-10">
    <form action="frgt.php" method="POST" name="frgt">
        <label for="email" class="col-sm-2 col-form-label">email</label>
      <input type="email" class="form-control" id="inputPassword" name="uname">
    </div>
  <div class="mb-3 row justify-content-center">
      <div class="col-sm-10">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="pass">
    </div>
    <div class="col-sm-10">
        <label for="inputPassword" class="col-sm-2 col-form-label"> confirm Password</label>
      <input type="password" class="form-control" id="inputPassword" name="cpass">
    </div>
    </div>
    <button type="submit" class="btn btn-primary"  name="frgt" style="width: 20%;">submit</button>
</form>
  </div>
    </div> 
</body>
</html>