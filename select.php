<?php include("index.php");?>
<html>
<header>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</header>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <table class="table table-dark table-striped"> 
            <thead>
              <tr>
                <th scope="col" style="text-align: center;">id</th>
                <th scope="col" style="text-align: center;">Firstname</th>
                <th scope="col" style="text-align: center;">Lastname</th>
                <th scope="col" style="text-align: center;">Branch</th>
                <th scope="col" style="text-align: center;">Delete</th>
                <th scope="col" style="text-align: center;">Update</th>
              </tr>
            </thead>
                <?php 
                    $sqls="SELECT * FROM list ";
                    $query=mysqli_query($conn,$sqls);
                    while($row=mysqli_fetch_array($query))
                    {
                ?>
                <tbody>
            <tr>
                <td style="text-align: center;"><?php echo $row['0']?></td>
                <td style="text-align: center;"><?php echo $row['1']?></td>
                <td style="text-align: center;"><?php echo $row['2']?></td>
                <td style="text-align: center;"><?php echo $row['3']?></td>
                <td style="text-align: center;"><a href="delete.php?did=<?php echo $row['0']; ?>"><button type="button" class="btn btn-dark">Delete</button></a></td>
                <td style="text-align: center;"><a href="update.php?uid=<?php echo $row['0']; ?>"><button type="button" class="btn btn-dark">Update</button></a></td>
              <?php } ?>
            </tr>
            </tbody>
        </table>
    </body>
</html>
