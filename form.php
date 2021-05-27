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
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" id="hesar">Firstname</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" id="firstname">
  </div>
  </div>
</div>

<div class="row">
 <div class="form-group col-lg-12">  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lastname</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" id="lastname">
  </div>
  </div>
  </div>

  <div class="row">
 <div class="form-group col-lg-12">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Branch</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="branch" id="branch">
  </div>
  </div>
  </div>

  <input type="submit" class="btn btn-primary" value="Submit" id="submit" name="submit"></input>
  
</form>
</div>
    
</body>
</html>