<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First project</title>
</head>

<body>
    <?php 
        $servername='localhost';
        $username='root';
        $password='king';
        $dbname='firstPro';

        $conn=mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn)
        {
            die('Connection failed: '.mysqli_connect_error());
        }

        if(isset($_POST['submit']))
        {
         $firstname =  $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $branch =  $_POST['branch'];

         $sql="INSERT INTO list (firstname,lastname,branch) values('$firstname','$lastname','$branch')";

         if(mysqli_query($conn,$sql))
         {
            echo 'You are registered successfully !';
         }
         else
         {
            echo 'OOPS! Registration failed';
         }

         mysqli_close($conn);
       }
    ?>
    
</body>
</html>




