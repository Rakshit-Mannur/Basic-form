<?PHP
    include("index.php");
    $id=$_GET['did'];
    $sqld="DELETE FROM list WHERE id=$id";
    $queryq=mysqli_query($conn,$sqld);
    if($queryq)
    {
        header("location:select.php");
    }
?>
