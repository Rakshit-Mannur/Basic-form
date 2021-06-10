<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>

<div class="nadu">
<form action="index.php" method="POST" enctype="multipart/form-data">
<div class="row">
 <div class="form-group col-lg-12">
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label" id="hesar"></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" id="firstname" placeholder="Firstname">
  </div>
  </div>
</div>

<div class="row">
 <div class="form-group col-lg-12">  
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" id="lastname" placeholder="Lastname"> 
  </div>
  </div>
  </div>

<div class="row">
 <div class="form-group col-lg-12">
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="branch" id="branch" placeholder="Branch"> 
  </div>
  </div>
</div>
  
  <button class="btn btn-dark" value="Submit" id="submit" name="submit" style="margin-top: 20px;margin-left: 10px;">Register</button>
  <button formaction="/first/select.php" class="btn btn-dark" style="margin-top: 20px;margin-left: 10px;">View list</button>
 
</form>
</div>
    
</body>
</html>